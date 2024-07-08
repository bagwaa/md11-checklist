<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $checklist = [
        'Preparation' => [
            'EFB: Import Flight Plan',
            'EFB: Request Ground Power',
            'Set Parking Brake',
            'Overhead: Battery ON - Close Guard',
            'Overhead: External Power ON',
            'Overhead: Fire Test Engines / APU',
            'Overhead: Emergency Lights ARMED',
            'Overhead: No Smoking ON',
            'Overhead: Seat Belts AUTO',
            'Overhead: Navigation Lights ON',
            'Overhead: Logo Lights ON',
            'Overhead: Nav IRS 1 ON',
            'Overhead: Nav IRS 2 ON',
            'Overhead: Nav IRS AUX ON',
            'FMC: Flight Plan Init -> Initialise IRS',
            'EFB: Send Flight Plan to FMC',
            'EFB: Set Payload and Fuel',
            'FMC: Add Flight #',
            'FMC: Add Cruise Altitude',
            'FMC: Add Cost Index',
            'FMC: Init Page 2: Drop in Weights',
            'FMC: F-PLN: Add SID and STAR (INSERT not EXECUTE)',
            'FMC: Performace -> Climb Data',
            'FMC: Enter Wind Information from OFP for FL100, FL250, FL350',
            'FMC: Format Wind : Example: 10000/233/008 HEIGHT/DEGREES/SPEED',
            'EFB: Perf Calculator',
            'FMC: TO/APPR: Enter Flex / Flap / V1 - VR - V2 / OAT (21C) Example',
            'FMC: TO/APPR: Thrust Limits: Select T/O and CLB Profiles',
            'Radio: SQUAK 2000',
            'Radio: Alt Reporting ON',
            'Uncage Standby Indicator',
            'MCP: Set Altitude',
            'MCP: Set Runway Heading',
            'MCP: Set Speed (might not need this, leave at 250)',
            'Overhead: Anti Ice L/R ON',
            'Overhead: Fuel Used Reset',
            'EFIS: Set DATA on MAP',
            'Pedestal: Set Autobrake to TO',
            'Pedestal: Set Radios',
            'Overhead: APU Power ON',
            'Overhead: Emergency Power ARMED',
            'Screen: Check Engine Page for APU Start',
            'Overhead: APU Bleed ON',
            'Overhead: External Power OFF',
            'EFB: Remove Ground Power',
            'EFB: Remove Chocks',
            'Lights: Beacon ON',
            'Autobrake: AUX HYD Pump 1 ON',
            'Check Lights',
            'Parking Brake: OFF',
            'Pushback',
            'Set Park Brake when Pushback is COMPLETE',
            'Overhead: Engine Ignition A/B ON',
            'Pedestal: Pull Start Selector 3',
            'Pedestal: N2 15% -> Fuel RUN / ON',
            'Overhead: Select Engine Anti Ice ON (if needed)',
            'Pedestal: Pull Start Selector 1',
            'Pedestal: N2 15% -> Fuel RUN / ON',
            'Overhead: Select Engine Anti Ice ON (if needed)',
            'Pedestal: Pull Start Selector 2',
            'Pedestal: N2 15% -> Fuel RUN / ON',
            'Overhead: Select Engine Anti Ice ON (if needed)',
            'Overhead: Engine Ice As Required',
            'Overhead: APU Bleed OFF',
            'Overhead: APU Power OFF (top right also)',
            'Pedestal: Scroll Wheel to Set Flaps',
            'Pedestal: Move Flap Leaver to Dial a Flap Section',
            'Yoke: Set Stab Trim to FMC value',
        ],
        'Start Taxi' => [
            'Radio: TARA ON',
        ],
        'Lights' => [
            'Overhead: Navigation Lights ON',
            'Overhead: Logo Lights ON',
        ],
        'Take Off' => [
        ],
        'Climb' => [
        ],
        'Cruise' => [
        ],
        'Descent' => [
        ],
        'Landing' => [
        ],
        'Post Flight' => [
        ],
        'Power Down' => [
        ],
    ];

    return view('checklist', [
        'checklist' => $checklist,
    ]);
});
