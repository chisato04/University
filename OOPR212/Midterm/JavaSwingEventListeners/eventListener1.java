package OOPR212.midterm.JavaSwingEventListeners;
import javax.swing.*;
import java.awt.event.*;

public class eventListener1 extends JFrame {
    private JTextField textField;
    private JLabel messageLabel;

    public eventListener1() {
        // Initialize components
        textField = new JTextField(20);
        messageLabel = new JLabel("The text is short.");

        // Set component names
        textField.setName("textField");
        messageLabel.setName("messageLabel");

        // Add components to frame
        add(textField, "North");
        add(messageLabel, "South");

        // Add key listener to text field
        textField.addKeyListener(new KeyAdapter() {
            @Override
            public void keyReleased(KeyEvent e) {
                String text = textField.getText();
                if (text.length() <= 10) {
                    messageLabel.setText("The text is short.");
                } else {
                    messageLabel.setText("The text is long.");
                }
            }
        });

        // Set default close
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        pack();
        setLocationRelativeTo(null);
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            new eventListener1().setVisible(true);
        });
    }
}