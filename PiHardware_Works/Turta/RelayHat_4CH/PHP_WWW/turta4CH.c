#include <wiringPi.h>
#include <stdio.h>

int main (int k, char *argv[])
{
  
  wiringPiSetup () ;
  pinMode (29, OUTPUT) ;
  pinMode (3, OUTPUT) ;
  pinMode (4, OUTPUT) ;
  pinMode (5, OUTPUT) ;
  
  int islev = (int)*argv[1];
  int pin = (int)*argv[2];
  //int pin_durum = (int)*argv[3];

  /*printf("Islev %c\n",islev);
  printf("pin %c\n",pin);
  printf("pin_durum %c\n",pin_durum);
  */

  if(islev == '1'){
    int pin_durum = (int)*argv[3];
    if(pin == '1'){
        if(pin_durum == '1'){
            digitalWrite(29, HIGH);
        }else if(pin_durum == '0'){
            digitalWrite(29, LOW);
        }
        else{
            printf("Yanlis pin durum!");
        }
    }
    else if(pin == '2'){
        if(pin_durum == '1'){
            digitalWrite(3, HIGH);
        }else if(pin_durum == '0'){
            digitalWrite(3, LOW);
        }
        else{
            printf("Yanlis pin durum!");
        }
    }
    else if(pin == '3'){
        if(pin_durum == '1'){
            digitalWrite(4, HIGH);
        }else if(pin_durum == '0'){
            digitalWrite(4, LOW);
        }
        else{
            printf("Yanlis pin durum!");
        }
    }
    else if(pin == '4'){
        if(pin_durum == '1'){
            digitalWrite(5, HIGH);
        }else if(pin_durum == '0'){
            digitalWrite(5, LOW);
        }
        else{
            printf("Yanlis pin durum!");
        }
    }
    else{
            printf("Yanlis pin!");
        }
  }
  else if(islev == '0'){
    if(pin == '1'){
      if(digitalRead(29)){
          printf("1");
      }else{
          printf("0");
      }
    }else if(pin == '2'){
      if(digitalRead(3)){
          printf("1");
      }else{
          printf("0");
      }
    }
    else if(pin == '3'){
      if(digitalRead(4)){
          printf("1");
      }else{
          printf("0");
      }
    }
    else if(pin == '4'){
      if(digitalRead(5)){
          printf("1");
      }else{
          printf("0");
      }
    }
  } 
  else{
    printf("Yanlis islev!");
  }
  
  return 0 ;
}
