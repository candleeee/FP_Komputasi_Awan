/* groovylint-disable-next-line CompileStatic */
pipeline {
    agent any
    stages {
        stage('Clone Repository') {
            steps {
                git 'https://github.com/username/repository.git'
            }
        }
        stage('Install Dependencies') {
            steps {
                sh 'ansible-galaxy install -r requirements.yml'
            }
        }
        stage('Run Ansible Playbook') {
            steps {
                ansiblePlaybook credentialsId: 'your-credentials-id', inventory: 'hosts', playbook:
'playbooks/mariadb.yml'
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
