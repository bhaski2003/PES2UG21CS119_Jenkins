pipeline {
    agent any

    environment {
        // Define environment variables
        SRN = 'PES2UG21CS119'
        // Additional code for readability, to be used in further stages
    }

    stages {
        stage('Build') {
            steps {
                script {
                    // Build stage: Compile the .cpp file
                    echo 'Building.....!!'
                    // wud get Notified by our hero -> webHook for changes in the rep and look for any updates
                    sh "g++ -o ${SRN}_executable ${SRN}_1.cpp"
                }
            }
        }

        stage('Test') {
            steps {
                script {
                    // Test stage: Print output of compiled .cpp file
                    echo 'Testing.....!!'
                    sh "./${SRN}_executable"
                    // Equivalent to cout << PES2UG21CS119.exe
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    // Deploy stage: Deployment steps
                    echo 'Deploying....!!'
                     // Simulate an error in the deployment stage
                      sh 'exit 1' // This command will intentionally fail
                }
            }
        }
    }

    post {
        // Post-build actions
        success {
            echo 'Pipeline succeeded!'
            // Additional actions for success (if any)
        }

        failure {
            echo 'Pipeline failed!'
            // Additional actions for failure (if any)
        }

        // Declarative Post Actions with timeout and retry
        always {
            timeout(time: 1, unit: 'HOURS') {
                echo 'This will always execute with a timeout of 1 hour.'
            }

            retry(3) {
                echo 'This will be retried up to 3 times.'
            }
        }
    }
}
