
import java.util.LinkedList;

public class BubbleSort {
    LinkedList<Integer> sort(LinkedList<Integer> arr) {

        Integer size = arr.size();

        for (Integer i = 0; i < size - 1; i++)
            for (int j = 0; j < size - i - 1; j++)
                if (arr.get(j) > arr.get(j + 1)) {
                    Integer temp = arr.get(j);
                    arr.add(j, arr.get(j + 1));
                    arr.add(j + 1, temp);
                }
        return arr;
    }

    
}
