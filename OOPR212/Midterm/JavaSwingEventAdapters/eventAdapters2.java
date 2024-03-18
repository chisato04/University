package OOPR212.midterm.JavaSwingEventAdapters;

import javax.swing.*;
import java.awt.event.*;
import java.util.HashMap;
import java.util.Map;

public class eventAdapters2 extends JFrame {
    private JTextArea textArea;
    private JLabel frequentCharLabel;

    public eventAdapters2() {
        // Initialize components
        textArea = new JTextArea(10, 20);
        frequentCharLabel = new JLabel(" ");

        // Set component names
        textArea.setName("textArea");
        frequentCharLabel.setName("frequentCharLabel");

        // Add components to frame
        add(new JScrollPane(textArea), "Center");
        add(frequentCharLabel, "South");

        // Add key listener to text area
        textArea.addKeyListener(new KeyAdapter() {
            @Override
            public void keyReleased(KeyEvent e) {
                String text = textArea.getText().replaceAll(" ", "").toLowerCase();
                char mostFrequentChar = getMostFrequentChar(text);
                frequentCharLabel.setText(String.valueOf(mostFrequentChar));
            }
        });

        // Set default close operation and window size
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        pack();
        setLocationRelativeTo(null);
    }

    private char getMostFrequentChar(String text) {
        Map<Character, Integer> charCounts = new HashMap<>();
        int maxCount = 0;
        char mostFrequentChar = ' ';

        for (char c : text.toCharArray()) {
            charCounts.put(c, charCounts.getOrDefault(c, 0) + 1);
            if (charCounts.get(c) > maxCount) {
                maxCount = charCounts.get(c);
                mostFrequentChar = c;
            }
        }

        return mostFrequentChar;
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            new eventAdapters2().setVisible(true);
        });
    }
}