#include <Wire.h> 
#include <LiquidCrystal_I2C.h>
LiquidCrystal_I2C lcd(0x27,16,2); //LCD 16x02, địa chỉ I2C là 0X27
int cbvao=2;
int cbra=3;
int led=4;
int songuoi=0;
String vao="";
String ra="";
int timeout_vao;
int timeout_ra;
int coi=5;





void setup() {

  Serial.begin(9600);
  
  lcd.init(); //Khởi động LCD
  lcd.backlight(); //Bật đèn nền
  lcd.setCursor(2,0); //Cột 2, hàng 0
  lcd.print("TRONG LOP HOC "); 
  lcd.setCursor(0,1); //Cột 0, hàng 1
  lcd.print("SO NGUOI : ");
  
  pinMode(cbvao,INPUT);
  pinMode(cbra,INPUT);
  pinMode(led,OUTPUT);
  pinMode(coi,OUTPUT);
  Serial.begin(9600);
  timeout_vao=0;
  timeout_ra=0;
}

void loop() {
  timeout_vao++;timeout_ra++;
 int gtcbvao=digitalRead(cbvao);Serial.println(gtcbvao);//gán gtri digitalRead cho gtcbvao và đưa nó ra màn hình
 int gtcbra=digitalRead(cbra);Serial.println(gtcbra);

 if(songuoi>0) {digitalWrite(led,HIGH);} //nếu có ng thì đèn led bật
 else {digitalWrite(led,LOW);} //k có thì tắt
 
 if(gtcbvao==0 && vao.charAt(0)!='v'){
    vao+="v";
  }
 if(gtcbra==0 && ra.charAt(0)!='r'){
    ra+="r";
  }
 if(vao.equals("v") && timeout_vao==1){  
    Serial.print(vao);
    songuoi++;
    vao="";
    delay(300);
    digitalWrite(coi,HIGH);
    delay(50);
    digitalWrite(coi,LOW);
    delay(1);
  }
 if(ra.equals("r") && songuoi>0 && timeout_ra==1){ //neesi số ng>0 và timeout_ra khác 1 thì
    Serial.println(ra); //đưa biến ra ra màn hình
    songuoi--;ra="";// (trừ đi ng)
    delay(500); //thời gian dừng, tính bằng giây
    digitalWrite(coi,HIGH); //giá trị ra của led, bật
    delay(50);
    digitalWrite(coi,LOW);
    delay(1);;
  }
  gtcbvao=digitalRead(cbvao); //gán lại gtri biến gtcbvao
  gtcbra=digitalRead(cbra);

  if (gtcbvao==0){
    timeout_vao++;
    vao="";
   }
  else {
    timeout_vao=0;
    vao="";
    }
  if (gtcbra==0){
    timeout_ra++;
    ra="";
    }
  else {timeout_ra=0;ra="";}
  Serial.print("So nguoi trong phong la: ");
  Serial.println(songuoi);
  
  lcd.setCursor(10,1); //Cột 10, hàng 1
  lcd.print(songuoi); 
  delay(200);
}