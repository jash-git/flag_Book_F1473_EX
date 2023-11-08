#include <stdio.h>


int main()
{
  int temp = 0;
  int i = 0;
  int j = 6;
  int data[6];
  data[0] = 11;
  data[1] = 12;
  data[2] = 10;
  data[3] = 15;
  data[4] = 1;
  data[5] = 2;
  while (j > 1) {
    for (i = 0; i<=(j - 2); i++) {
      if (data[(i + 1)] < data[i]) {
        temp = data[(i + 1)];
        data[(i + 1)] = data[i];
        data[i] = temp;
      }
    }
    j = (j - 1);
  }
  for (i = 0; i<=5; i++) {
    printf("%d ", data[i]);
  }
  printf("\n");
  return 0;
}