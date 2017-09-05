echo "moving to teambits.mx"
sshpass -p 'TeamBITS@2016' scp -r ./templates adminteambits@teambits.mx:public_html
sshpass -p 'TeamBITS@2016' scp -r ./public/css adminteambits@teambits.mx:public_html/public


#sshpass -p 'TeamBITS@2016' scp -r ./public adminteambits@teambits.mx:public_html
echo "complete"