pipeline {
    agent any 

    environment {
        // Define environment variable for SRN
        SRN = 'PES2UG21CS119'
        // Additional comment for clarity
    }

    stages {
        stage('Build') {
            steps {
                script {
                    // Print a message for the 'Build' stage
                    echo 'Building.....!!'
                    // Compile the .cpp file using g++
                    sh "g++ -o ${SRN}_executable ${SRN}_1.cpp"
                }
            }
        }

        stage('Test') {
            steps {
                script {
                    // Print a message for the 'Test' stage
                    echo 'Testing.....!!'
                    // Run the compiled executable
                    sh "./${SRN}_executable"
                    // It's similar to cout << PES2UG21CS119.exe 
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    // Print a message for the 'Deploy' stage
                    echo 'Deploying....!!'
                    // Additional deployment steps can be added here
                     // Simulate an error in the deployment stage
                    sh 'exit 1' // This command will intentionally fail
                }
            }
        

      post {
        success {
            echo 'Pipeline succeeded!'

            // Additional actions to be performed on success
            // e.g., notification, artifact archiving, etc.
        }

        failure {
            echo 'Pipeline failed!'

            // Additional actions to be performed on failure
            // e.g., notification, cleanup, etc.
        }
    }
}
