pipeline {
    agent any
    stages {
        stage('Clone Repository') {
            steps {
                git 'https://github.com/candleeee/FP_Komputasi_Awan.git'
            }
        }
        stage('Install Dependencies') {
            steps {
                echo 'Testing...'
            }
        }
        stage('Run Ansible Playbook') {
            steps {
               echo 'Testing...'
            }
        }
    }
    post {
        success {
            echo 'Deployment successful!'
        }
        failure {
            echo 'Deployment failed!'
        }
    }
}
