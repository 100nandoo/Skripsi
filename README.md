# My Project

This is my project for my final thesis. It's a system for monitoring visitor and also control lock door, lights, air conditioner of a laboratorium. This is just a prototype, so I didn't use real air conditioner and lights. Instead I used LED, and relay for simulation.

## Getting Started

### Prerequisities

## Software
* LAMP/XAMMP
* Arduino IDE
* Text Editor
* Node.js
* NPM module: socket.io, serialport, mysql

## Hardware
* Arduino Uno
* RFID Reader (MFC522)
* LED
* Solenoid Lock Door
* Serial cable
* Relay

## Deployment
1. Install the requirement that mention in Prerequisities.
2. Download this repo, extract the content besides node_modules folder.
3. Connect arduino with component components as shown in schematic folder.
4. Flash the first arduino that connected to rfid module with arduino code in arduino folder.
5. Flash the second arduino with standardFirmata. You can find it in file > example > firmata.
6. Run main.js, by doing these: open project folder in cmd or terminal.
   Type this `node main.js COM3 COM4`
