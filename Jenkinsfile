pipeline {
  agent any 

    environment{
           // here its to define our env vars : 
      SRN = 'PES2UG21CS119'
           // its just addition to code to enhnce readibilty , as w'll use our SRNs further
    }
  
      stages {

          stage('Build'){
            steps{
              script{
                   echo 'Building.....!!'
                   // this above will work as & when the webHooks notify them that the changes have been occured in the rep
                   // will look for any of changes in our REP 
                   sh "g++ -o ${SRN}_executable ${SRN}_1.cpp"
                } 
             }
          }

        
        stage('Test'){
          steps{
              script{
                  echo 'Testing.....!!'
                  // below one's ll print o/p of compiled .cpp file using shell script -> sh
                  sh "./${SRN}_executable"
                  // it's as -> cout << PES2UG21CS119.exe 
              }
           }
        }

        stage('Deploy'){
            steps{
                script{
                    echo 'Deploying....!!'
                }
            }
        }

        post {
           failure {
              echo 'Pipeline failed!'
             // for err handling (if any)
           }
       }

    
  }
}
