<?php   
    require_once ("Includes/simplecms-config.php");

    function prep_DB_content ()
    {
        global $databaseConnection;
        $admin_role_id = 1;

        create_tables($databaseConnection);
        create_roles($databaseConnection, $admin_role_id);
        create_admin($databaseConnection, $admin_role_id);
    }

    function create_tables($databaseConnection)
    {
        $query_users = "CREATE TABLE IF NOT EXISTS users (id INT NOT NULL AUTO_INCREMENT, username VARCHAR(50), password CHAR(40), PRIMARY KEY (id))";
        $databaseConnection->query($query_users);

        $query_roles = "CREATE TABLE IF NOT EXISTS roles (id INT NOT NULL, name VARCHAR(50), PRIMARY KEY (id))";
        $databaseConnection->query($query_roles);

        $query_users_in_roles = "CREATE TABLE IF NOT EXISTS users_in_roles (id INT NOT NULL AUTO_INCREMENT, user_id INT NOT NULL, role_id INT NOT NULL, ";
        $query_users_in_roles .= " PRIMARY KEY (id), FOREIGN KEY (user_id) REFERENCES users(id), FOREIGN KEY (role_id) REFERENCES roles(id))";
        $databaseConnection->query($query_users_in_roles);

        $query_pages = "CREATE TABLE IF NOT EXISTS pages (id INT NOT NULL AUTO_INCREMENT, menulabel VARCHAR(50), content TEXT, PRIMARY KEY (id))";
        $databaseConnection->query($query_pages);
    }

    function create_roles($databaseConnection, $admin_role_id)
    {
        $query_check_roles_exist = "SELECT id FROM roles WHERE id <= 2";
        $statement_check_roles_exist = $databaseConnection->prepare($query_check_roles_exist);
        $statement_check_roles_exist->execute();
        $statement_check_roles_exist->store_result();
        if ($statement_check_roles_exist->num_rows == 0)
        {
            $query_insert_roles = "INSERT INTO roles (id, name) VALUES ($admin_role_id, 'admin'), (2, 'user')";
            $statement_inser_roles = $databaseConnection->prepare($query_insert_roles);
            $statement_inser_roles->execute();
        }
    }

    function create_admin($databaseConnection, $admin_role_id)
    {
        // HACK: Storing config values in variables so that they aren't passed by reference later.
        $default_admin_username = DEFAULT_ADMIN_USERNAME;
        $default_admin_password = DEFAULT_ADMIN_PASSWORD;

        $query_check_admin_exists = "SELECT id FROM users WHERE username = ? LIMIT 1";
        $statement_check_admin_exists = $databaseConnection->prepare($query_check_admin_exists);
        $statement_check_admin_exists->bind_param('s', $default_admin_username);
        $statement_check_admin_exists->execute();
        $statement_check_admin_exists->store_result();
        if($statement_check_admin_exists->num_rows == 0)
        {
            $query_insert_admin = "INSERT INTO users (username, password) VALUES (?, SHA(?))";
            $statement_insert_admin = $databaseConnection->prepare($query_insert_admin);
            $statement_insert_admin->bind_param('ss', $default_admin_username, $default_admin_password);
            $statement_insert_admin->execute();
            $statement_insert_admin->store_result();

            $admin_user_id = $statement_insert_admin->insert_id;
            $query_add_admin_to_role = "INSERT INTO users_in_roles(user_id, role_id) VALUES (?, ?)";
            $statement_add_admin_to_role = $databaseConnection->prepare($query_add_admin_to_role);
            $statement_add_admin_to_role->bind_param('dd', $admin_user_id, $admin_role_id);
            $statement_add_admin_to_role->execute();
            $statement_add_admin_to_role->close();
        }
    }
?>