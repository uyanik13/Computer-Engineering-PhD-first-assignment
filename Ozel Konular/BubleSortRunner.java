
import java.time.Duration;
import java.time.Instant;
import java.util.LinkedList;
import java.util.Random;

public class BubleSortRunner {

    public static void main(String[] args) {
        LinkedList<Integer> numbers = new LinkedList<Integer>();
        Random random = new Random(); //
        int arrayCount = 5000;

        for (int i = 1; i <= arrayCount; i++) {
            numbers.add(random.nextInt(1000));
        }

        // System.out.println(numbers);

        // Instant start = Instant.now();
        // long startTime = (long) Instant.now().getNano();

        BubbleSort ob = new BubbleSort();
        numbers = ob.sort(numbers);

        // Instant end = Instant.now();
        // long estimated = (long) Instant.now().getNano() - startTime;
        // Duration timeElapsed = Duration.between(start, end);
        // System.out.println("Dizi Oluşturulma Süresi : milisaniye : " +
        // timeElapsed.toMillis() + " milisaniye");
        // System.out.println("Dizi Oluşturulma Süresi : nanosaniye : " + estimated);

        // for (Integer num : numbers) {
        // System.out.println(num);
        // }

        System.out.println(numbers.size());
    }

}
