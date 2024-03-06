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
                }
            }
        }

        post {
            failure {
                // Display a message if the pipeline fails
                echo 'Pipeline failed!'
                // Additional error handling can be added here
            }
        }
    }
}
