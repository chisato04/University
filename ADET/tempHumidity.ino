
#include <DHT.h>;
#include <LiquidCrystal_I2C.h>
#include <Wire.h>

LiquidCrystal_I2C lcd(0x27,16,2);

#define DHTPIN 2
#define DHTTYPE DHT11
DHT dht(DHTPIN, DHTTYPE);


int h;
int t;

void setup()
{
    Serial.begin(9600);
    Serial.println("Temperature and Humidity Sensor Test");
    dht.begin();
    lcd.init(); //initialize the lcd
    lcd.backlight();
}

void loop()
{
    h = dht.readHumidity();
    t = dht.readTemperature();

    Serial.print("Humidity: ");
    Serial.print(h);
    Serial.print(" %, Temp: ");
    Serial.print(t);
    Serial.println(" ° Celsius");

    lcd.setCursor(0, 0);
    lcd.println("Hello, Chisato! ");

    lcd.setCursor(0, 1);
    lcd.print("T:");
    lcd.print(t);
    lcd.print("C");

    lcd.setCursor(11, 1);
    lcd.print("H:");
    lcd.print(h);
    lcd.print("%");

  delay(250);
}