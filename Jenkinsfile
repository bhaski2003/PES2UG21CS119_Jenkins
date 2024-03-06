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
                    // Notify changes in the repository and look for any updates
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
                }
            }
        }
    }

    post {
        // Post-build actions
        failure {
            echo 'Pipeline failed!'
            // Additional actions for failure (if any)
        }
        // Uncomment and add actions for success if needed
        // success {
        //     echo 'Pipeline succeeded!'
        //     // Additional actions for success (if any)
        // }
    }
}
