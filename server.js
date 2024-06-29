const { exec } = require('child_process');

// Command to start Laravel PHP server
const laravelServeCommand = 'php artisan serve --host=0.0.0.0 --port=8000';

// Execute the command
const laravelProcess = exec(laravelServeCommand);

laravelProcess.stdout.on('data', (data) => {
    console.log(`stdout: ${data}`);
});

laravelProcess.stderr.on('data', (data) => {
    console.error(`stderr: ${data}`);
});

laravelProcess.on('close', (code) => {
    console.log(`Laravel PHP server process exited with code ${code}`);
});
