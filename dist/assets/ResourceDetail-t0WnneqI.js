import{n as e}from"./rolldown-runtime-jpDsebLB.js";import{r as t,t as n}from"./react-vendor-CJnihGfj.js";import{l as r,n as i}from"./router-W4jBjYkb.js";import{F as a,G as o,Q as s,Z as c,ct as l,d as u,et as d,ht as f,i as p,pt as m,vt as h}from"./vendor-BvAmHIfc.js";import{t as g}from"./index-BFDaS65Q.js";import{t as _}from"./PageBanner-BBMGlxna.js";var v=e(t(),1),y=n(),b=[{id:`setup`,title:`The FTC Stack & Setup`,icon:(0,y.jsx)(d,{size:18})},{id:`hardware`,title:`Hardware Mapping & Control`,icon:(0,y.jsx)(s,{size:18})},{id:`drivetrain`,title:`Drivetrain & Kinematics`,icon:(0,y.jsx)(p,{size:18})},{id:`pid`,title:`Advanced Mechanisms & PID`,icon:(0,y.jsx)(o,{size:18})},{id:`vision`,title:`Vision & Autonomous`,icon:(0,y.jsx)(c,{size:18})}];function x(){let[e,t]=(0,v.useState)(`setup`),n=({code:e,language:t=`java`})=>(0,y.jsxs)(`div`,{className:`my-6 rounded-xl overflow-hidden shadow-sm border border-navy/10`,children:[(0,y.jsxs)(`div`,{className:`bg-navy px-4 py-2 flex items-center gap-2 border-b border-white/10`,children:[(0,y.jsx)(u,{size:14,className:`text-gold`}),(0,y.jsx)(`span`,{className:`text-xs font-mono text-gray-400`,children:t})]}),(0,y.jsx)(`pre`,{className:`p-4 bg-[#0a1122] text-gray-300 font-mono text-sm overflow-x-auto leading-relaxed`,children:(0,y.jsx)(`code`,{children:e.trim()})})]});return(0,y.jsx)(`div`,{className:`mt-16 border-t border-gray-100 pt-16 text-left`,children:(0,y.jsxs)(`div`,{className:`flex flex-col lg:flex-row gap-12`,children:[(0,y.jsx)(`div`,{className:`lg:w-1/3 flex-shrink-0`,children:(0,y.jsxs)(`div`,{className:`sticky top-24 bg-gray-50 rounded-2xl border border-gray-100 p-6`,children:[(0,y.jsx)(`h3`,{className:`text-xs font-bold text-crimson uppercase tracking-widest mb-6`,children:`Course Modules`}),(0,y.jsx)(`div`,{className:`space-y-2`,children:b.map(n=>(0,y.jsxs)(`button`,{onClick:()=>t(n.id),className:`w-full flex items-center justify-between p-4 rounded-xl text-left transition-all duration-200 ${e===n.id?`bg-navy text-white shadow-md transform scale-[1.02]`:`bg-white text-gray-600 hover:bg-gray-100 border border-transparent hover:border-gray-200`}`,children:[(0,y.jsxs)(`div`,{className:`flex items-center gap-3`,children:[(0,y.jsx)(`span`,{className:`${e===n.id?`text-gold`:`text-gray-400`}`,children:n.icon}),(0,y.jsx)(`span`,{className:`font-bold text-sm`,children:n.title})]}),e===n.id&&(0,y.jsx)(l,{size:16,className:`text-white/50`})]},n.id))}),(0,y.jsxs)(`div`,{className:`mt-8 pt-6 border-t border-gray-200`,children:[(0,y.jsx)(`p`,{className:`text-xs text-gray-500 mb-4`,children:`This curriculum reflects Cartesian Robotics's internal training standards for Java programming and FTC hardware control.`}),(0,y.jsxs)(`a`,{href:`https://github.com/FIRST-Tech-Challenge/FtcRobotController`,target:`_blank`,rel:`noopener noreferrer`,className:`text-xs font-bold text-navy hover:text-crimson transition-colors flex items-center gap-1`,children:[`Official SDK Repository `,(0,y.jsx)(l,{size:12})]})]})]})}),(0,y.jsx)(`div`,{className:`lg:w-2/3`,children:(()=>{switch(e){case`setup`:return(0,y.jsxs)(`div`,{className:`animate-in fade-in slide-in-from-bottom-4 duration-500`,children:[(0,y.jsx)(`h2`,{className:`text-3xl font-black text-navy mb-6`,children:`The FTC Stack & Setup`}),(0,y.jsx)(`p`,{className:`text-lg text-gray-600 mb-8 leading-relaxed`,children:`Welcome to the Cartesian Robotics Software Engineering Course. This guide moves beyond the basic installation of Android Studio and dives into the architecture of modern FTC programming.`}),(0,y.jsx)(`h3`,{className:`text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4`,children:`The Android Studio Environment`}),(0,y.jsxs)(`p`,{className:`text-gray-600 mb-6`,children:[`While OnBot Java and Blocks exist, competitive teams standardize on `,(0,y.jsx)(`strong`,{children:`Android Studio`}),`. It provides Git integration, powerful autocomplete, and the ability to pull in external dependencies like FTCLib and RoadRunner via Gradle.`]}),(0,y.jsx)(`p`,{className:`text-gray-600 mb-8`,children:`The FTC SDK is essentially an Android App project. The code you write runs on the Robot Controller (either a Rev Control Hub or an Android phone), which communicates over Wi-Fi Direct to the Driver Station.`}),(0,y.jsx)(`h3`,{className:`text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4`,children:`OpMode vs LinearOpMode`}),(0,y.jsx)(`p`,{className:`text-gray-600 mb-4`,children:`Everything you run on the robot extends from one of these two base classes.`}),(0,y.jsxs)(`ul`,{className:`space-y-4 mb-8`,children:[(0,y.jsxs)(`li`,{className:`bg-gray-50 p-4 rounded-xl border border-gray-100`,children:[(0,y.jsx)(`strong`,{className:`text-crimson font-mono`,children:`OpMode`}),": An event-driven structure. You provide `init()`, `init_loop()`, and `loop()` methods. The system calls `loop()` repeatedly. It's safe but can make complex autonomous sequences hard to read."]}),(0,y.jsxs)(`li`,{className:`bg-gray-50 p-4 rounded-xl border border-gray-100`,children:[(0,y.jsx)(`strong`,{className:`text-crimson font-mono`,children:`LinearOpMode`}),": A procedural structure. You provide a single `runOpMode()` method. You must manually call `waitForStart()` and then run your own `while(opModeIsActive())` loop. This is the standard for both Auto and TeleOp on our team."]})]}),(0,y.jsx)(`h3`,{className:`text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4`,children:`Libraries We Use`}),(0,y.jsxs)(`div`,{className:`grid grid-cols-1 md:grid-cols-2 gap-4 mb-8`,children:[(0,y.jsxs)(`div`,{className:`border border-gray-200 rounded-xl p-5`,children:[(0,y.jsx)(`h4`,{className:`font-bold text-navy mb-2`,children:`FTCLib`}),(0,y.jsx)(`p`,{className:`text-sm text-gray-500`,children:`A library that brings FRC-style command-based programming, kinematics, and advanced controllers (PIDF) to FTC.`})]}),(0,y.jsxs)(`div`,{className:`border border-gray-200 rounded-xl p-5`,children:[(0,y.jsx)(`h4`,{className:`font-bold text-navy mb-2`,children:`RoadRunner`}),(0,y.jsx)(`p`,{className:`text-sm text-gray-500`,children:`The industry standard for motion profiling and pure pursuit autonomous path following.`})]})]})]});case`hardware`:return(0,y.jsxs)(`div`,{className:`animate-in fade-in slide-in-from-bottom-4 duration-500`,children:[(0,y.jsx)(`h2`,{className:`text-3xl font-black text-navy mb-6`,children:`Hardware Mapping & Control`}),(0,y.jsx)(`p`,{className:`text-lg text-gray-600 mb-8 leading-relaxed`,children:"Before the code can move a motor, it must find it in the robot's configuration file. This is done via the `HardwareMap`."}),(0,y.jsx)(`h3`,{className:`text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4`,children:`Initializing Hardware`}),(0,y.jsx)(`p`,{className:`text-gray-600 mb-4`,children:"In a `LinearOpMode`, the first thing you do inside `runOpMode()` is declare your hardware variables and map them to the names configured on the Driver Station app."}),(0,y.jsx)(n,{code:`
@TeleOp(name="Basic Drive", group="Linear Opmode")
public class BasicDriveOpMode extends LinearOpMode {

    // Declare OpMode members.
    private DcMotor leftDrive = null;
    private DcMotor rightDrive = null;

    @Override
    public void runOpMode() {
        // Initialize the hardware variables
        leftDrive  = hardwareMap.get(DcMotor.class, "left_drive");
        rightDrive = hardwareMap.get(DcMotor.class, "right_drive");

        // Reverse one of the motors so driving forward goes forward
        leftDrive.setDirection(DcMotor.Direction.REVERSE);
        rightDrive.setDirection(DcMotor.Direction.FORWARD);

        // Wait for the game to start (driver presses PLAY)
        waitForStart();

        // run until the end of the match (driver presses STOP)
        while (opModeIsActive()) {
            // Main control loop goes here
        }
    }
}
            `}),(0,y.jsx)(`h3`,{className:`text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4 mt-12`,children:`Gamepad Input & Deadzones`}),(0,y.jsx)(`p`,{className:`text-gray-600 mb-4`,children:'Gamepad joysticks rarely return exactly `0.0` when resting. This causes "stick drift" where the robot creeps slowly. We handle this using deadzones.'}),(0,y.jsx)(n,{code:`
double drive = -gamepad1.left_stick_y; // Negative because pushing up is negative Y
double turn  =  gamepad1.right_stick_x;

// Apply a deadzone to prevent stick drift
if (Math.abs(drive) < 0.05) drive = 0;
if (Math.abs(turn) < 0.05) turn = 0;

// Calculate power for a basic tank/arcade drive
double leftPower    = Range.clip(drive + turn, -1.0, 1.0) ;
double rightPower   = Range.clip(drive - turn, -1.0, 1.0) ;

leftDrive.setPower(leftPower);
rightDrive.setPower(rightPower);
            `})]});case`drivetrain`:return(0,y.jsxs)(`div`,{className:`animate-in fade-in slide-in-from-bottom-4 duration-500`,children:[(0,y.jsx)(`h2`,{className:`text-3xl font-black text-navy mb-6`,children:`Drivetrain & Kinematics`}),(0,y.jsx)(`p`,{className:`text-lg text-gray-600 mb-8 leading-relaxed`,children:`Mecanum wheels allow a robot to move in any direction (holonomic drive) without changing its orientation. This requires specific vector math.`}),(0,y.jsx)(`h3`,{className:`text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4`,children:`Robot-Centric Mecanum Math`}),(0,y.jsx)(`p`,{className:`text-gray-600 mb-4`,children:`To drive a mecanum base, we calculate the power for each of the 4 wheels based on three inputs: Forward (Y), Strafe (X), and Turn (RX). The denominator ensures that if the combined power exceeds 1.0, all motors are scaled down proportionally.`}),(0,y.jsx)(n,{code:`
double y = -gamepad1.left_stick_y; // Remember, this is reversed!
double x = gamepad1.left_stick_x * 1.1; // Counteract imperfect strafing
double rx = gamepad1.right_stick_x;

// Denominator is the largest motor power (absolute value) or 1
// This ensures all the powers maintain the same ratio, but only when
// at least one is out of the range [-1, 1]
double denominator = Math.max(Math.abs(y) + Math.abs(x) + Math.abs(rx), 1);

double frontLeftPower = (y + x + rx) / denominator;
double backLeftPower = (y - x + rx) / denominator;
double frontRightPower = (y - x - rx) / denominator;
double backRightPower = (y + x - rx) / denominator;

frontLeftMotor.setPower(frontLeftPower);
backLeftMotor.setPower(backLeftPower);
frontRightMotor.setPower(frontRightPower);
backRightMotor.setPower(backRightPower);
            `}),(0,y.jsx)(`h3`,{className:`text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4 mt-12`,children:`Field-Centric Drive`}),(0,y.jsx)(`p`,{className:`text-gray-600 mb-4`,children:`In Field-Centric drive, pushing "forward" on the joystick always moves the robot away from the driver, regardless of which way the robot is currently facing. This requires reading the robot's heading from the Control Hub's internal IMU (gyroscope) and rotating the joystick vectors.`}),(0,y.jsx)(n,{code:`
// Read IMU heading
double botHeading = imu.getRobotYawPitchRollAngles().getYaw(AngleUnit.RADIANS);

// Rotate the movement direction counter to the bot's rotation
double rotX = x * Math.cos(-botHeading) - y * Math.sin(-botHeading);
double rotY = x * Math.sin(-botHeading) + y * Math.cos(-botHeading);

// Then use rotX and rotY in the standard mecanum formula
double denominator = Math.max(Math.abs(rotY) + Math.abs(rotX) + Math.abs(rx), 1);
double frontLeftPower = (rotY + rotX + rx) / denominator;
// ... (continue for other 3 motors)
            `})]});case`pid`:return(0,y.jsxs)(`div`,{className:`animate-in fade-in slide-in-from-bottom-4 duration-500`,children:[(0,y.jsx)(`h2`,{className:`text-3xl font-black text-navy mb-6`,children:`Advanced Mechanisms & PID`}),(0,y.jsx)(`p`,{className:`text-lg text-gray-600 mb-8 leading-relaxed`,children:"When controlling arms, elevators, or linear slides, simple \\`setPower()\\` is not enough. Gravity will pull the arm down, and the arm will slam into its limits if not slowed down gracefully. We solve this with PIDF Control."}),(0,y.jsx)(`h3`,{className:`text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4`,children:`The PIDF Concept`}),(0,y.jsxs)(`ul`,{className:`space-y-4 mb-8 text-gray-600`,children:[(0,y.jsxs)(`li`,{children:[(0,y.jsx)(`strong`,{className:`text-navy`,children:`Proportional (P):`}),` The core driver. The further you are from the target, the more power is applied.`]}),(0,y.jsxs)(`li`,{children:[(0,y.jsx)(`strong`,{className:`text-navy`,children:`Integral (I):`}),` Adds power over time if the arm is stuck just below the target (overcoming steady-state error).`]}),(0,y.jsxs)(`li`,{children:[(0,y.jsx)(`strong`,{className:`text-navy`,children:`Derivative (D):`}),` The "brakes". It looks at how fast you are approaching the target and slows the motor down to prevent overshoot.`]}),(0,y.jsxs)(`li`,{children:[(0,y.jsx)(`strong`,{className:`text-navy`,children:`Feedforward (F):`}),` A constant power added to counteract gravity. For an elevator, it's a constant. For a rotating arm, it involves cosine math.`]})]}),(0,y.jsx)(`h3`,{className:`text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4`,children:`Implementation with FTCLib`}),(0,y.jsx)(`p`,{className:`text-gray-600 mb-4`,children:"Instead of writing the math ourselves, we use FTCLib's PIDController. This code goes inside the `while(opModeIsActive())` loop."}),(0,y.jsx)(n,{code:`
// Setup (before loop)
PIDController controller = new PIDController(p, i, d);
int targetPosition = 500; // Target encoder ticks

// Inside main TeleOp loop
controller.setPID(p, i, d);
int armPos = armMotor.getCurrentPosition();

// Calculate PID power
double pid = controller.calculate(armPos, targetPosition);

// Calculate Feedforward (ff is a tuned constant for gravity)
double ff = Math.cos(Math.toRadians(targetPosition / ticks_in_degree)) * f;

// Apply combined power
double power = pid + ff;
armMotor.setPower(power);
            `}),(0,y.jsxs)(`div`,{className:`bg-amber-50 border border-amber-200 rounded-xl p-5 mt-8`,children:[(0,y.jsx)(`h4`,{className:`font-bold text-amber-800 mb-2`,children:`Tuning Tips`}),(0,y.jsx)(`p`,{className:`text-sm text-amber-700`,children:`Always tune Feedforward (F) first to ensure the arm can hold its own weight. Then tune P until the arm reaches the target quickly. If it overshoots and oscillates, increase D to dampen it. Only use I if absolutely necessary.`})]})]});case`vision`:return(0,y.jsxs)(`div`,{className:`animate-in fade-in slide-in-from-bottom-4 duration-500`,children:[(0,y.jsx)(`h2`,{className:`text-3xl font-black text-navy mb-6`,children:`Vision & Autonomous`}),(0,y.jsx)(`p`,{className:`text-lg text-gray-600 mb-8 leading-relaxed`,children:`Autonomous periods rely heavily on computer vision to read randomized game elements and AprilTags to determine the robot's absolute position on the field.`}),(0,y.jsx)(`h3`,{className:`text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4`,children:`The VisionPortal`}),(0,y.jsx)(`p`,{className:`text-gray-600 mb-4`,children:`Introduced recently, the VisionPortal handles camera streams and allows you to attach multiple processors (like AprilTagProcessor and custom OpenCV pipelines) simultaneously.`}),(0,y.jsx)(n,{code:`
AprilTagProcessor aprilTag = new AprilTagProcessor.Builder()
    .setDrawAxes(true)
    .setDrawCubeProjection(true)
    .setDrawTagOutline(true)
    .build();

VisionPortal visionPortal = new VisionPortal.Builder()
    .setCamera(hardwareMap.get(WebcamName.class, "Webcam 1"))
    .addProcessor(aprilTag)
    .build();
            `}),(0,y.jsx)(`h3`,{className:`text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4 mt-12`,children:`Reading AprilTags`}),(0,y.jsx)(`p`,{className:`text-gray-600 mb-4`,children:"During the `init_loop()` or the beginning of Auto, you can poll the processor to find detected tags and extract their 3D pose relative to the camera."}),(0,y.jsx)(n,{code:`
List<AprilTagDetection> currentDetections = aprilTag.getDetections();

for (AprilTagDetection detection : currentDetections) {
    if (detection.metadata != null) {
        telemetry.addLine(String.format("Found Tag %s", detection.metadata.name));
        telemetry.addLine(String.format("XYZ %6.1f %6.1f %6.1f  (inch)", 
            detection.ftcPose.x, detection.ftcPose.y, detection.ftcPose.z));
        telemetry.addLine(String.format("PRY %6.1f %6.1f %6.1f  (deg)", 
            detection.ftcPose.pitch, detection.ftcPose.roll, detection.ftcPose.yaw));
    }
}
telemetry.update();
            `}),(0,y.jsx)(`h3`,{className:`text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4 mt-12`,children:`State Machines`}),(0,y.jsx)(`p`,{className:`text-gray-600 mb-4`,children:"To string actions together in autonomous without using blocking `sleep()` calls, we use Enums and `switch` statements to create a Finite State Machine (FSM)."}),(0,y.jsx)(n,{code:`
enum AutoState {
    DRIVE_TO_BACKDROP,
    SCORE_PIXEL,
    PARK,
    IDLE
}

AutoState currentState = AutoState.DRIVE_TO_BACKDROP;

// Inside while(opModeIsActive())
switch (currentState) {
    case DRIVE_TO_BACKDROP:
        if (!drive.isBusy()) {
            arm.setTarget(1000);
            currentState = AutoState.SCORE_PIXEL;
        }
        break;
    case SCORE_PIXEL:
        if (arm.isAtTarget()) {
            intake.outtake();
            currentState = AutoState.PARK;
        }
        break;
    case PARK:
        // ...
        break;
    case IDLE:
        break;
}
            `})]});default:return null}})()})]})})}var S={BookOpen:f,Code2:d,Box:m,Library:a};function C(){let{slug:e}=r(),t=g(`resources`).resources.find(t=>t.slug===e),n=t&&S[t.icon]||f;return t?(0,y.jsxs)(`div`,{children:[(0,y.jsx)(_,{title:t.title,breadcrumbs:[{label:`Resources`,to:`/resources`},{label:t.title}]}),(0,y.jsx)(`section`,{className:`py-12 md:py-20 bg-white`,children:(0,y.jsxs)(`div`,{className:`max-w-6xl mx-auto px-6`,children:[(0,y.jsxs)(i,{to:`/resources`,className:`inline-flex items-center gap-2 text-sm text-gray-500 hover:text-crimson mb-8 transition-colors`,children:[(0,y.jsx)(h,{size:16}),` Back to Resources`]}),(0,y.jsxs)(`div`,{className:`bg-white rounded-2xl p-5 sm:p-10 border border-gray-100 shadow-lg text-center`,children:[(0,y.jsx)(`div`,{className:`w-24 h-24 mx-auto bg-crimson/10 text-crimson rounded-full flex items-center justify-center mb-6`,children:(0,y.jsx)(n,{size:48})}),(0,y.jsx)(`h2`,{className:`text-3xl font-bold text-navy mb-6`,children:t.title}),(0,y.jsx)(`p`,{className:`text-gray-600 leading-relaxed text-lg max-w-2xl mx-auto mb-10`,children:t.content}),e===`software`?(0,y.jsx)(x,{}):(0,y.jsxs)(`div`,{className:`p-6 bg-gray-50 rounded-xl text-gray-500 text-sm`,children:[(0,y.jsx)(`p`,{children:`Detailed documentation and links for this resource are currently being updated for the new season.`}),(0,y.jsx)(`p`,{className:`mt-2`,children:`Check back soon or contact us for immediate access.`})]})]})]})})]}):(0,y.jsx)(`div`,{className:`min-h-screen flex items-center justify-center bg-gray-50`,children:(0,y.jsxs)(`div`,{className:`text-center px-6`,children:[(0,y.jsx)(`h1`,{className:`text-2xl font-medium text-navy mb-2`,children:`Resource Not Found`}),(0,y.jsx)(i,{to:`/resources`,className:`btn-primary mt-4`,children:`Back to Resources`})]})})}export{C as default};