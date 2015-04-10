#include <iostream>  //Basic library
#include <cstdlib>  //system("pause")
using namespace std;

int main(){ 
int a;
int b;
int y;
cin >> a >> b;
for(int x=1;x<=a;x++){
if(a%x==0 && b%x==0){
y=x;
}
cout << y << endl;

return 0;
}