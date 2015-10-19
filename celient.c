#include<stdio.h>
#include<string.h>
#include<stdlib.h>
#include<sys/socket.h>
#include<arpa/inet.h>
#include<unistd.h>
#include<pthread.h>

int main(int argc, char *argv[]){



char message[1000]. server_reply[2000];
int socket_desc, client_sock, 
struct sockaddr_in server, client;



socket_desc =socket(AF_INET , SOCK_STREAM,0);
if( socket_desc == -1)

printf(" Could not establish socket");

server.sin_family= AF_INET;
server.sin_addr.s_addr= INADDR_ANY;
server.sin_port= htons(8888);

//create socket, prepare socket address, and bind socket

if(conect(sock,(struct sockaddr*)&server,sizeof(server)<0);

while(TRUE){

printf("Enter characters")

scanf("%s" , message);

if(send(sock,message,strlen (message),0)<0)


{

  puts("failed to send")
  return 1;

}

if(recv(socket_desc,server_reply,2000,0)<0){


      puts("recv failed");
      break;
      puts("server reply");
      puts(server_reply);

  }

  close(sock);
  return 0;


}















