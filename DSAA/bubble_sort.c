#include<stdio.h>
#include<stdbool.h>

void swap(int* patrick, int* malinao)
{
	int james = *patrick;
	*patrick = *malinao;
	*malinao = james;
}

//optimized version of bubble sort

void bubbleSort(int bussingArray[], int num)
{
	int i, j;
	bool swapped;
	for(i=0; i<num - 1; i++){
		swapped = false;
		for(j= 0; j < num - i - 1; j++) {
			if(bussingArray[j] > bussingArray[j+1]){
			swap(&bussingArray[j], &bussingArray[j+1]);
			swapped = true;
		}
	}
	//if no two elements were swapped by inner loop,
	//then break
	if (swapped == false)
		break;
}

}
//function to print an array

void printArray(int bussingArray[], int size) {
	int i;
	for(i=0; i < size; i++)
		printf("%d ", bussingArray[i]);
}

//driver program to test above ffunctions

int main()
{
	int size;

	printf("Enter array size: ");
	scanf("%d", &size);

	int bussingArray[size];
	int n = sizeof(bussingArray)/sizeof(bussingArray[0]);

	for(int i=0; i < size; i++){
		printf("Enter numbers[%d]: ", i);
		scanf("%d", &bussingArray[i]);
	}

	bubbleSort (bussingArray, n);
	printf("Sorted array: \n");
	printArray(bussingArray, n);
	return 0;
}

//PRE-DEFINED
/*
int main()
{
    int arr[] = { 64, 34, 25, 12, 22, 11, 90 };
    int n = sizeof(arr) / sizeof(arr[0]);
    bubbleSort(arr, n);
    printf("Sorted array: \n");
    printArray(arr, n);
    return 0;
}
*///