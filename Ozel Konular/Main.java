
import java.time.Duration;
import java.time.Instant;
import java.util.LinkedList;

public class Main {

    public static void main(String[] args) {
        LinkedList<Integer> numbers = new LinkedList<Integer>();

        Integer n;

        Instant start = Instant.now();
        long startTime = (long) Instant.now().getNano();
        // LINKED LIST OLUSTURULUYOR
        for (n = 1; n <= 1000000; n++) {
            numbers.add(n);
        }

        // LINKED LIST OLUSTURULMA SURESI
        Instant end = Instant.now();
        Duration timeElapsed = Duration.between(start, end);
        System.out.println("LinkedList Olusturulma Suresi :  " + timeElapsed);

        // LINKED LIST 1. ELEMAN EKLEME
        long timeBetween = (long) Instant.now().getNano() - startTime;
        start = Instant.now();
        startTime = (long) Instant.now().getNano();
        numbers.addFirst(9);
        end = Instant.now();
        timeBetween = (long) Instant.now().getNano() - startTime;
        timeElapsed = Duration.between(start, end);
        System.out.println("1. eleman ekleme :  " + timeBetween);

        // LINKED LIST 1. ELEMAN CIKARMA
        start = Instant.now();
        startTime = (long) Instant.now().getNano();
        numbers.removeFirst();
        end = Instant.now();
        timeBetween = (long) Instant.now().getNano() - startTime;
        timeElapsed = Duration.between(start, end);
        System.out.println("1. elemani çıkarma :  " + timeBetween);

        // LINKED LIST SONA ELEMAN EKLEME
        start = Instant.now();
        startTime = (long) Instant.now().getNano();
        numbers.addLast(-1);
        end = Instant.now();
        timeBetween = (long) Instant.now().getNano() - startTime;
        timeElapsed = Duration.between(start, end);
        System.out.println("En Sona Eleman Ekleme : " + timeBetween);

        // LINKED LIST SONDAN ELEMAN CIKARMA
        start = Instant.now();
        startTime = (long) Instant.now().getNano();
        numbers.removeLast();
        end = Instant.now();
        timeBetween = (long) Instant.now().getNano() - startTime;
        timeElapsed = Duration.between(start, end);
        System.out.println("En Sondan  Eleman  Cikarma :  " + timeBetween);

        // LINKED LIST ORTAYA ELAMAN ATAMA
        start = Instant.now();
        startTime = (long) Instant.now().getNano();
        numbers.add(500000, -2);
        end = Instant.now();
        timeBetween = (long) Instant.now().getNano() - startTime;
        timeElapsed = Duration.between(start, end);
        System.out.println("Ortaya Eleman Atama :  " + timeBetween);

        // LINKED LIST ORTADAN ELEMAN CIKARMA
        start = Instant.now();
        startTime = (long) Instant.now().getNano();
        numbers.remove(500000);
        end = Instant.now();
        timeBetween = (long) Instant.now().getNano() - startTime;
        timeElapsed = Duration.between(start, end);
        System.out.println("Ortadan  Eleman Cikarma :  " + timeBetween);

    }

}
