pipeline {
    agent any
    stages {
        stage('Checkout SCM') {
            steps {
                checkout([$class: 'GitSCM', 
                          branches: [[name: 'master']], 
                          userRemoteConfigs: [[url: 'https://github.com/candleeee/FP_Komputasi_Awan']]])
            }
        }
        stage('Tool Install') {
            steps {
                echo 'Installing tools...'
            }
        }
        stage('Install Dependencies') {
            steps {
                echo 'Installing dependencies...'
            }
        }
        stage('Docker Build') {
            steps {
                echo 'Building Docker image...'
            }
        }
