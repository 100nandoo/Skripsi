#include <SPI.h>
#include <MFRC522.h>

#define SS_PIN 10
#define RST_PIN 9
MFRC522 mfrc522(SS_PIN, RST_PIN);  // Create MFRC522 instance.

void setup() {
  Serial.begin(9600); // Initialize serial communications with the PC
  SPI.begin();      // Init SPI bus
  mfrc522.PCD_Init(); // Init MFRC522 card
}

void loop() {
  // Look for new cards
  if ( ! mfrc522.PICC_IsNewCardPresent()) {
    return;
  }

  // Select one of the cards
  if ( ! mfrc522.PICC_ReadCardSerial()) {
    return;
  }
  // Dump debug info about the card. PICC_HaltA() is automatically called.
  cetak(mfrc522.uid.size);
  Serial.println("");
  delay(2000);
}

void cetak(byte buffsize){
  for(byte i = 0; i < buffsize; i++){
    Serial.print(mfrc522.uid.uidByte[i]);
  }
}

