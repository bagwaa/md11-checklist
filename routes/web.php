<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $checklist = [
        'Preparation' => [
            'Parking Brake ON',
            'EFB: Import Flight Plan',
            'EFB: Request Ground Power',
            'EFB: Send Flight Plan to FMC (optional)',
            'EFB: Set Payload and Fuel',
            'Overhead: Battery ON - Close Guard',
            'Overhead: External Power ON',
            'Overhead: Window Heat ON',
            'Overhead: Fire Test Engines / APU',
            'Overhead: Emergency Lights ARMED',
            'Overhead: Emergency Power ARMED',
            'Overhead: Navigation Lights ON',
            'Overhead: Logo Lights ON',
            'Overhead: Nav IRS 1 ON',
            'Overhead: Nav IRS 2 ON',
            'Overhead: Nav IRS AUX ON',
            'Overhead: No Smoking ON',
            'Overhead: Seat Belts AUTO',
            'Cage Standby Artificial Horizon',
            'Set QNH on Standby Altimeter',
            'FMC: Flight Plan Init -> Initialise IRS',
            'FMC: Flight Plan Init -> Enter Origin and Destination',
            'FMC: Flight Plan Init -> Enter Alternate',
            'FMC: Add Flight #',
            'FMC: Add Cruise Altitude',
            'FMC: Add Cost Index',
            'FMC: Add Temp / Wind',
            'FMC: Init Page 2: Drop in Weights',
            'FMC: F-PLN: Add SID and STAR (INSERT not EXECUTE)',
            'FMC: Performace -> Climb Data',
            'FMC: Enter Wind Information from OFP for FL100, FL250, FL350',
            'FMC: Format Wind : Example: 10000/233/008 HEIGHT/DEGREES/SPEED',
            'EFB: Perf Calculator',
            'FMC: TO/APPR: Enter Flex / Flap / V1 - VR - V2 / OAT (21C) Example',
            'FMC: TO/APPR: Thrust Limits: Select T/O and CLB Profiles',
            'EFIS: Set QNH',
            'MCP: Switch to PLAN and Check Route',
            'Radio: SQUAK 2000',
            'Radio: Alt Reporting ON',
            'MCP: Set Altitude',
            'MCP: Set Runway Heading and PULL',
            'MCP: Set Speed to 250 knots',
            'Overhead: Anti Ice L/R ON',
            'Overhead: Fuel Used Reset',
            'EFIS: Set DATA on MAP',
            'Pedestal: Set Autobrake to TO',
            'Pedestal: Set Radios',
            'Overhead: APU Power ON',
            'Screen: Check Engine Page for APU Start',
            'Overhead: APU Bleed ON',
            'Overhead: External Power OFF',
            'EFB: Remove Ground Power',
            'EFB: Remove Chocks',
            'Lights: Beacon ON',
            'Autobrake: AUX HYD Pump 1 ON',
            'Overhead: AUX Pump 1 ON',
            'Overhead: Check Lights',
            'Parking Brake: OFF',
            'Pushback',
            'Set Park Brake when Pushback is COMPLETE',
            'Overhead: Engine Ignition A/B ON',
            'Pedestal: Pull Start Selector 3 (Right Engine)',
            'Pedestal: N2 15% -> Fuel RUN / ON',
            'Overhead: Select Engine Anti Ice ON (if needed)',
            'Pedestal: Pull Start Selector 1 (Left Engine)',
            'Pedestal: N2 15% -> Fuel RUN / ON',
            'Overhead: Select Engine Anti Ice ON (if needed)',
            'Pedestal: Pull Start Selector 2 (Tail Engine)',
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
            'Overhead: Taxi Lights ON',
            'Parking Brake OFF',
            'MCP: Prof Armed',
            'MCP: Nav Armed',
            'Taxi Out',
            'Radio: TARA ON',
            'Spoliers Armed',
            'MCP: Check Altitude, Heading, Speed',
        ],
        'Lights' => [
            'Overhead: Navigation Lights ON',
            'Overhead: Logo Lights ON',
            'Overhead: Landing Lights ON x 3',
            'Overhead: Runway Turnoff Lights ON',
            'Overhead: Strobe Lights (HIGH INT) ON',
            'Overhead: Check Light Configuration',
        ],
        'Take Off' => [
            'MCP: Autoflight Click (Takeoff ARMED)',
            'Release Brake',
            'Pedestal: Throttle 70%',
            // 'MCP: Autoflight Click (Takeoff THRUST)',
        ],
        'Climb' => [
            'Gear UP',
            // 'MCP: FMS SPD',
            // 'MCP: Autoflight Click',
            'AT FR: Flaps to SLAT position',
            'Autopilot ON',
            'AT SR: Flaps to UP position',
            'MCP: Set Altitude',
            'MCP: Check still in PROF mode',
            'EFIS: Move to Std Pressure',
            'Overhead: Turnoff Lights OFF',
            'Overhead: Seat Belts OFF',
        ],
        'After Take Off' => [
            'Disarm Spoilers',
            'Autobrake OFF',
            'Overhead: 10k Landing Lights OFF',
            'Pedestal: Set Dial a Flap to 15',
        ],
        'Cruise' => [
            'MCP: Pull Altitude Knob to Climb Now (optional)',
            'MCP: Pull Heading Knob to follow HDG Mode (optional)',
            'EFB: Landing Performance',
        ],
        'Descent' => [
            'Set QNH on Standby Altimeter',
            'FMC: TO/APPR: Check 35/Land',
            'EFIS: Set QNH',
            'EFIS: Set Baro to MINIMUMS',
            'Set Autobrake',
            '10k: Landing Lights ON',
            'Seat Belts ON',
            'Flaps ONE position to bring slats out',
            'Speedbrakes when needed',
            'FMS Speed',
        ],
        'Landing' => [
            'Press APPR/LAND when established on ILS',
            'Speedbrakes ARMED',
            'Landing Gear DOWN',
            'Flaps 35',
            'AP Off at 1000ft',
        ],
        'Post Flight' => [
            'Flaps UP',
            'Speedbrake UP',
            'Overhead: Landing Lights OFF',
        ],
        'Power Down' => [
            'Taxi lights OFF',
            'Chocks on in FMC',
            'Seatbelts OFF',
            'Engines Off',
            'Clean up Overhead Panel',
            'Ground Power OFF',
            'Battery OFF',
        ],
    ];

    return view('checklist', [
        'checklist' => $checklist,
    ]);
});
