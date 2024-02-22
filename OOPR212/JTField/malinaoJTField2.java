package OOPR212.JTField;
import javax.swing.*;
import java.awt.event.*;
import java.awt.*;

public class malinaoJTField2
{
    public static void main(String[] args)
    {
        JFrame malinaoFrame = new JFrame("Text Display");
        malinaoFrame.setSize(400, 200);
        malinaoFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        JTextField textField = new JTextField(20);
        textField.setName("textField");

        JLabel label = new JLabel();
        label.setName("label");

        JButton enableButton = new JButton("Enable");
        enableButton.setName("enableButton");

        JButton disableButton = new JButton("Disable");
        disableButton.setName("disableButton");

        disableButton.addActionListener(new ActionListener()
        {
            @Override
            public void actionPerformed(ActionEvent e)
            {
                textField.setEnabled(false);
            }
        });

        enableButton.addActionListener(new ActionListener()
        {
            @Override
            public void actionPerformed(ActionEvent e)
            {
                textField.setEnabled(true);
            }
        });

        malinaoFrame.setLayout(new FlowLayout());
        malinaoFrame.add(textField);
        malinaoFrame.add(enableButton);
        malinaoFrame.add(disableButton);
        malinaoFrame.add(label);
        malinaoFrame.setVisible(true);
    }
}