#include <iostream.h>
#include <conio.h>

void main(){
int *arr,n;
int i,j,temp;
clrscr();
cout<<"Enter Number Of Element : ";
cin>>;

arr = (int*)malloc(n * sizeof(int));

cout<<"Enter n Elements\n";
for(i = 0; i < n; i++){
cout<<*(arr+i);
}

for(i = 0; i < n; i++){
for(j = 0; j < n - i - 1; j++){
if(*(arr+j) > *(arr+j+1)){
temp = *(arr+j);
*(arr+j) = *(arr+j+1);
*(arr+j+1) = temp;
}
}
}
cout<<"Sorted Array\n";
for(i = 0; i < n; i++){
cout<<" "<<*(arr+i);
}
getch();
}