#include<stdio.h>
#include<stdlib.h>
#define size 100
void enqueue();
void dequeue();
void show();
int inp_arr[size];
int rear = - 1;
int front = - 1;

int main()
{
    int ch;
    while(1)
    {
        printf("1. enqueue operation\n");
        printf("2. dequeue operation\n");
        printf("3. display the queue\n");
        printf("4. exit\n");
        printf("enter your choice of operations: ");
        scanf("%d", &ch);
        switch(ch)
        {
            case 1:
            enqueue();
            case 2:
            dequeue();
            case 3:
            show();
            case 4:
            exit(0);
            default:
            printf("incoreect choice");
        }
    }
}

void enqueue()
{
    int insert_item;
    if(rear == size - 1)
        printf("overflow\n");
    else
    {
        if(front == - 1)

        front = 0;
        printf("element to be inserted in the queue: ");
        scanf("%d", &insert_item);
        rear = rear + 1;
        inp_arr[rear] = insert_item;
    }
}

void dequeue(){
    if (front == - 1 || front > rear)
    {
        printf("underflow\n");
        return;
    }
    else
    {
        printf("element deleted from the queue: ");
        front = front + 1;
    }
}

void show()
{
    if (front == - 1)
        printf("empty queue\n");
    else
    {
     printf("queue:\n");
     for (int i = front; i <= rear; i++)
        printf("%d", inp_arr[i]);
        printf("\n");
    }
}