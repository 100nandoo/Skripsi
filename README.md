# Smart Laboratorium Control System
This is my project for my final thesis. It's a system for monitoring visitor and also control lock door, lights, air conditioner of a laboratorium using Node.js, Arduino Uno, and full stack website.

## Architecture
### Hardware
TO DO -- add block diagram here

#### Hardware Components breakdown
... Using arduino Uno, RFID Reader ...

### Software
TO DO -- add block diagram here

#### Software Components breakdown
##### Node.js Server
... Explain node js server what, how, when

## Workflow
... Workflow Diagram
... Explaination of workflow process, step by step

## Implementation

### Prerequisities

#### Software
* LAMP/XAMMP
* Arduino IDE
* Text Editor
* Node.js
* NPM module: socket.io, serialport, mysql

#### Hardware
* Arduino Uno
* RFID Reader (MFC522)
* LED
* Solenoid Lock Door
* Serial cable
* Relay

#### Deployment
1. Install the requirement that mention in Prerequisities.
2. Download this repo, extract the content besides node_modules folder.
3. Connect arduino with component components as shown in schematic folder.
4. Flash the first arduino that connected to rfid module with arduino code in arduino folder.
5. Flash the second arduino with standardFirmata. You can find it in file > example > firmata.
6. Run main.js, by doing these: open project folder in cmd or terminal.

   Type this `node main.js COM3 COM4`
   COM3 is the arduino with firmata, COM4 is the arduino that connected to rfid module.

## Limitation
You can implement this project on Windows and Linux without problem. I have tested on Windows 10 and Linux Mint. You can also implement it on MacOS and BSD but I haven't tested it yet. This project is developed in Windows 10 laptops, and I am using [Atom](https://www.atom.io) as my text editor. 
