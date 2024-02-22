package OOPR212.JTField;
import javax.swing.*;
import java.awt.event.*;
import java.awt.*;

public class malinaoJTField1 {
    public static void main(String[] args)
    {
        JFrame malinaoFrame = new JFrame("Text Display");
        malinaoFrame.setSize(400, 200);
        malinaoFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        JTextField textField = new JTextField(20);
        textField.setName("textField");

        JLabel label = new JLabel();
        label.setName("label");

        JButton displayButton = new JButton("Display Text");
        displayButton.setName("displayButton");

        displayButton.addActionListener(new ActionListener()
        {
            @Override
            public void actionPerformed(ActionEvent e) {
                String enteredText = textField.getText();
                label.setText(enteredText);
            }
        });

        malinaoFrame.setLayout(new FlowLayout());
        malinaoFrame.add(textField);
        malinaoFrame.add(displayButton);
        malinaoFrame.add(label);
        malinaoFrame.setVisible(true);
    }
}