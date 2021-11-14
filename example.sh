#!/bin/sh
KUNING="\033[1;33m"
NC="\033[0m" # No Color
clear
figlet -w $(tput cols) -c "3Vluzi"
uptime
echo -e "${KUNING}---------------------------------------\${NC}"
PS3="Select the operation: "
echo -e "${KUNING}---------------------------------------\${NC}"
select opt in Twitter Github  quit; do
case $opt in
Twitter)
#Perintah
;;
Github)
#Perintah
;;

quit)
break
;;
*)
echo "Invalid option \$REPLY"
;;
esac
done
