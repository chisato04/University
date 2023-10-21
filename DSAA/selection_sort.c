#include<stdio.h>

void swap(int *xp, int *yp){
	int temp = *xp;
	*xp = *yp;
	*yp = temp;
}

void selectionSort (int arr[], int n){
	
	int i,j,min_idx;
	
	for(i=0; i < n-1; i++){
		min_idx = i;
		for(j=i+1; j < n; j++)
		if (arr[j]< arr[min_idx])
			min_idx = j;
			
		if(min_idx != i)
			swap(&arr[min_idx], &arr[i]);
	}
}

void printArray(int arr[], int size){
	int i;
	for(i=0; i<size; i++)
		printf("%d ", arr[i]);
	printf("\n");
}

int main(){
	
	int size;
	
	printf("enter array size: ");
	scanf("%d", &size);
	
	int arr[size];
	int n = sizeof(arr)/sizeof(arr[0]);
	
	for(int i=0; i < size; i++){
		printf("Enter numbers[%d]: ", i);
		scanf("%d", &arr[i]);
	}
	
	selectionSort(arr,n);
	printf("Sorted array: \n");
	printArray(arr,n);
	return 0;
}

//PRE-DEFINED
/*
int main()
{
    int arr[] = {64, 25, 12, 22, 11};
    int n = sizeof(arr)/sizeof(arr[0]);
    selectionSort(arr, n);
    printf("Sorted array: \n");
    printArray(arr, n);
    return 0;
}
*/