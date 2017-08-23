echo "moving to teambits.mx"
sshpass -p 'TeamBITS@2016' scp -r ./public ./src ./templates adminteambits@teambits.mx:public_html
echo "complete"