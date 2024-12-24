pipeline {
    agent any
    stages {
        stage('Checkout SCM') {
            steps {
                checkout([$class: 'GitSCM', 
                          branches: [[name: 'main']], 
                          userRemoteConfigs: [[url: 'https://github.com/Ghifari25/Laundry_Tubes']]])
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
