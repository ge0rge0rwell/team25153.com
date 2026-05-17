import { useState, useEffect } from 'react'
import { Code2, Cpu, Wrench, Focus, Crosshair, ChevronRight, Terminal } from 'lucide-react'

const modules = [
  { id: 'setup', title: 'The FTC Stack & Setup', icon: <Code2 size={18} /> },
  { id: 'hardware', title: 'Hardware Mapping & Control', icon: <Cpu size={18} /> },
  { id: 'drivetrain', title: 'Drivetrain & Kinematics', icon: <Wrench size={18} /> },
  { id: 'pid', title: 'Advanced Mechanisms & PID', icon: <Focus size={18} /> },
  { id: 'vision', title: 'Vision & Autonomous', icon: <Crosshair size={18} /> },
]

export default function SoftwareDocs() {
  const [activeModule, setActiveModule] = useState('setup')

  // Helper to render code blocks nicely
  const CodeBlock = ({ code, language = 'java' }) => (
    <div className="my-6 rounded-xl overflow-hidden shadow-sm border border-navy/10">
      <div className="bg-navy px-4 py-2 flex items-center gap-2 border-b border-white/10">
        <Terminal size={14} className="text-gold" />
        <span className="text-xs font-mono text-gray-400">{language}</span>
      </div>
      <pre className="p-4 bg-[#0a1122] text-gray-300 font-mono text-sm overflow-x-auto leading-relaxed">
        <code>{code.trim()}</code>
      </pre>
    </div>
  )

  const renderContent = () => {
    switch (activeModule) {
      case 'setup':
        return (
          <div className="animate-in fade-in slide-in-from-bottom-4 duration-500">
            <h2 className="text-3xl font-black text-navy mb-6">The FTC Stack & Setup</h2>
            <p className="text-lg text-gray-600 mb-8 leading-relaxed">
              Welcome to the Cartesian Robotics Software Engineering Course. This guide moves beyond the basic installation of Android Studio and dives into the architecture of modern FTC programming.
            </p>

            <h3 className="text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4">The Android Studio Environment</h3>
            <p className="text-gray-600 mb-6">
              While OnBot Java and Blocks exist, competitive teams standardize on <strong>Android Studio</strong>. It provides Git integration, powerful autocomplete, and the ability to pull in external dependencies like FTCLib and RoadRunner via Gradle.
            </p>
            <p className="text-gray-600 mb-8">
              The FTC SDK is essentially an Android App project. The code you write runs on the Robot Controller (either a Rev Control Hub or an Android phone), which communicates over Wi-Fi Direct to the Driver Station.
            </p>

            <h3 className="text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4">OpMode vs LinearOpMode</h3>
            <p className="text-gray-600 mb-4">
              Everything you run on the robot extends from one of these two base classes.
            </p>
            <ul className="space-y-4 mb-8">
              <li className="bg-gray-50 p-4 rounded-xl border border-gray-100">
                <strong className="text-crimson font-mono">OpMode</strong>: An event-driven structure. You provide `init()`, `init_loop()`, and `loop()` methods. The system calls `loop()` repeatedly. It's safe but can make complex autonomous sequences hard to read.
              </li>
              <li className="bg-gray-50 p-4 rounded-xl border border-gray-100">
                <strong className="text-crimson font-mono">LinearOpMode</strong>: A procedural structure. You provide a single `runOpMode()` method. You must manually call `waitForStart()` and then run your own `while(opModeIsActive())` loop. This is the standard for both Auto and TeleOp on our team.
              </li>
            </ul>

            <h3 className="text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4">Libraries We Use</h3>
            <div className="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
              <div className="border border-gray-200 rounded-xl p-5">
                <h4 className="font-bold text-navy mb-2">FTCLib</h4>
                <p className="text-sm text-gray-500">A library that brings FRC-style command-based programming, kinematics, and advanced controllers (PIDF) to FTC.</p>
              </div>
              <div className="border border-gray-200 rounded-xl p-5">
                <h4 className="font-bold text-navy mb-2">RoadRunner</h4>
                <p className="text-sm text-gray-500">The industry standard for motion profiling and pure pursuit autonomous path following.</p>
              </div>
            </div>
          </div>
        )
      case 'hardware':
        return (
          <div className="animate-in fade-in slide-in-from-bottom-4 duration-500">
            <h2 className="text-3xl font-black text-navy mb-6">Hardware Mapping & Control</h2>
            <p className="text-lg text-gray-600 mb-8 leading-relaxed">
              Before the code can move a motor, it must find it in the robot's configuration file. This is done via the `HardwareMap`.
            </p>

            <h3 className="text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4">Initializing Hardware</h3>
            <p className="text-gray-600 mb-4">
              In a `LinearOpMode`, the first thing you do inside `runOpMode()` is declare your hardware variables and map them to the names configured on the Driver Station app.
            </p>

            <CodeBlock code={`
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
            `} />

            <h3 className="text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4 mt-12">Gamepad Input & Deadzones</h3>
            <p className="text-gray-600 mb-4">
              Gamepad joysticks rarely return exactly `0.0` when resting. This causes "stick drift" where the robot creeps slowly. We handle this using deadzones.
            </p>

            <CodeBlock code={`
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
            `} />
          </div>
        )
      case 'drivetrain':
        return (
          <div className="animate-in fade-in slide-in-from-bottom-4 duration-500">
            <h2 className="text-3xl font-black text-navy mb-6">Drivetrain & Kinematics</h2>
            <p className="text-lg text-gray-600 mb-8 leading-relaxed">
              Mecanum wheels allow a robot to move in any direction (holonomic drive) without changing its orientation. This requires specific vector math.
            </p>

            <h3 className="text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4">Robot-Centric Mecanum Math</h3>
            <p className="text-gray-600 mb-4">
              To drive a mecanum base, we calculate the power for each of the 4 wheels based on three inputs: Forward (Y), Strafe (X), and Turn (RX). The denominator ensures that if the combined power exceeds 1.0, all motors are scaled down proportionally.
            </p>

            <CodeBlock code={`
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
            `} />

            <h3 className="text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4 mt-12">Field-Centric Drive</h3>
            <p className="text-gray-600 mb-4">
              In Field-Centric drive, pushing "forward" on the joystick always moves the robot away from the driver, regardless of which way the robot is currently facing. This requires reading the robot's heading from the Control Hub's internal IMU (gyroscope) and rotating the joystick vectors.
            </p>

            <CodeBlock code={`
// Read IMU heading
double botHeading = imu.getRobotYawPitchRollAngles().getYaw(AngleUnit.RADIANS);

// Rotate the movement direction counter to the bot's rotation
double rotX = x * Math.cos(-botHeading) - y * Math.sin(-botHeading);
double rotY = x * Math.sin(-botHeading) + y * Math.cos(-botHeading);

// Then use rotX and rotY in the standard mecanum formula
double denominator = Math.max(Math.abs(rotY) + Math.abs(rotX) + Math.abs(rx), 1);
double frontLeftPower = (rotY + rotX + rx) / denominator;
// ... (continue for other 3 motors)
            `} />
          </div>
        )
      case 'pid':
        return (
          <div className="animate-in fade-in slide-in-from-bottom-4 duration-500">
            <h2 className="text-3xl font-black text-navy mb-6">Advanced Mechanisms & PID</h2>
            <p className="text-lg text-gray-600 mb-8 leading-relaxed">
              When controlling arms, elevators, or linear slides, simple \`setPower()\` is not enough. Gravity will pull the arm down, and the arm will slam into its limits if not slowed down gracefully. We solve this with PIDF Control.
            </p>

            <h3 className="text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4">The PIDF Concept</h3>
            <ul className="space-y-4 mb-8 text-gray-600">
              <li><strong className="text-navy">Proportional (P):</strong> The core driver. The further you are from the target, the more power is applied.</li>
              <li><strong className="text-navy">Integral (I):</strong> Adds power over time if the arm is stuck just below the target (overcoming steady-state error).</li>
              <li><strong className="text-navy">Derivative (D):</strong> The "brakes". It looks at how fast you are approaching the target and slows the motor down to prevent overshoot.</li>
              <li><strong className="text-navy">Feedforward (F):</strong> A constant power added to counteract gravity. For an elevator, it's a constant. For a rotating arm, it involves cosine math.</li>
            </ul>

            <h3 className="text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4">Implementation with FTCLib</h3>
            <p className="text-gray-600 mb-4">
              Instead of writing the math ourselves, we use FTCLib's PIDController. This code goes inside the `while(opModeIsActive())` loop.
            </p>

            <CodeBlock code={`
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
            `} />
            
            <div className="bg-amber-50 border border-amber-200 rounded-xl p-5 mt-8">
              <h4 className="font-bold text-amber-800 mb-2">Tuning Tips</h4>
              <p className="text-sm text-amber-700">
                Always tune Feedforward (F) first to ensure the arm can hold its own weight. Then tune P until the arm reaches the target quickly. If it overshoots and oscillates, increase D to dampen it. Only use I if absolutely necessary.
              </p>
            </div>
          </div>
        )
      case 'vision':
        return (
          <div className="animate-in fade-in slide-in-from-bottom-4 duration-500">
            <h2 className="text-3xl font-black text-navy mb-6">Vision & Autonomous</h2>
            <p className="text-lg text-gray-600 mb-8 leading-relaxed">
              Autonomous periods rely heavily on computer vision to read randomized game elements and AprilTags to determine the robot's absolute position on the field.
            </p>

            <h3 className="text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4">The VisionPortal</h3>
            <p className="text-gray-600 mb-4">
              Introduced recently, the VisionPortal handles camera streams and allows you to attach multiple processors (like AprilTagProcessor and custom OpenCV pipelines) simultaneously.
            </p>

            <CodeBlock code={`
AprilTagProcessor aprilTag = new AprilTagProcessor.Builder()
    .setDrawAxes(true)
    .setDrawCubeProjection(true)
    .setDrawTagOutline(true)
    .build();

VisionPortal visionPortal = new VisionPortal.Builder()
    .setCamera(hardwareMap.get(WebcamName.class, "Webcam 1"))
    .addProcessor(aprilTag)
    .build();
            `} />

            <h3 className="text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4 mt-12">Reading AprilTags</h3>
            <p className="text-gray-600 mb-4">
              During the `init_loop()` or the beginning of Auto, you can poll the processor to find detected tags and extract their 3D pose relative to the camera.
            </p>

            <CodeBlock code={`
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
            `} />

            <h3 className="text-xl font-bold text-navy mb-4 border-l-4 border-crimson pl-4 mt-12">State Machines</h3>
            <p className="text-gray-600 mb-4">
              To string actions together in autonomous without using blocking `sleep()` calls, we use Enums and `switch` statements to create a Finite State Machine (FSM).
            </p>

            <CodeBlock code={`
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
            `} />
          </div>
        )
      default:
        return null
    }
  }

  return (
    <div className="mt-16 border-t border-gray-100 pt-16 text-left">
      <div className="flex flex-col lg:flex-row gap-12">
        
        {/* Sidebar Navigation */}
        <div className="lg:w-1/3 flex-shrink-0">
          <div className="sticky top-24 bg-gray-50 rounded-2xl border border-gray-100 p-6">
            <h3 className="text-xs font-bold text-crimson uppercase tracking-widest mb-6">Course Modules</h3>
            <div className="space-y-2">
              {modules.map((mod) => (
                <button
                  key={mod.id}
                  onClick={() => setActiveModule(mod.id)}
                  className={`w-full flex items-center justify-between p-4 rounded-xl text-left transition-all duration-200 ${
                    activeModule === mod.id 
                      ? 'bg-navy text-white shadow-md transform scale-[1.02]' 
                      : 'bg-white text-gray-600 hover:bg-gray-100 border border-transparent hover:border-gray-200'
                  }`}
                >
                  <div className="flex items-center gap-3">
                    <span className={`${activeModule === mod.id ? 'text-gold' : 'text-gray-400'}`}>
                      {mod.icon}
                    </span>
                    <span className="font-bold text-sm">{mod.title}</span>
                  </div>
                  {activeModule === mod.id && <ChevronRight size={16} className="text-white/50" />}
                </button>
              ))}
            </div>
            
            <div className="mt-8 pt-6 border-t border-gray-200">
              <p className="text-xs text-gray-500 mb-4">
                This curriculum reflects Cartesian Robotics's internal training standards for Java programming and FTC hardware control.
              </p>
              <a href="https://github.com/FIRST-Tech-Challenge/FtcRobotController" target="_blank" rel="noopener noreferrer" className="text-xs font-bold text-navy hover:text-crimson transition-colors flex items-center gap-1">
                Official SDK Repository <ChevronRight size={12}/>
              </a>
            </div>
          </div>
        </div>

        {/* Main Content Area */}
        <div className="lg:w-2/3">
          {renderContent()}
        </div>

      </div>
    </div>
  )
}
