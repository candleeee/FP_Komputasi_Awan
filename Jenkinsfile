pipeline {
    agent any

    environment {
        ANSIBLE_HOST_KEY_CHECKING = 'False' // Menonaktifkan pengecekan key SSH
    }

    stages {
        stage('Clone Repository') {
            steps {
                // Clone repositori dari GitHub
                git 'https://github.com/Faqs1/tubes_komputasi.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                // Instal dependensi dari requirements.yml
                sh 'ansible-galaxy install -r requirements.yml'
            }
        }

        stage('Run Ansible Playbook') {
            steps {
                // Menjalankan Ansible Playbook dengan kredensial SSH
                withCredentials([sshUserPrivateKey(credentialsId: 'b6dc3518-4b6e-4774-a292-d5aeda03de68', keyFileVariable: 'KEY')]) {
                    sh 'ansible-playbook -i hosts -u ubuntu --private-key $KEY mariadb.yml'
                }
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
