package OOPR212.midterm.JavaSwingEventClasses;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class eventClass1 extends JFrame implements ActionListener
{
	private JLabel lblText;

    public eventClass1() {
        setTitle("Button Text Display");
        setSize(400, 300);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLocationRelativeTo(null);

        // create label
        lblText = new JLabel("Click a button to display its text");
        lblText.setName("lblText");
        add(lblText, BorderLayout.NORTH);

        // create buttons
        JPanel buttonPanel = new JPanel(new GridLayout(5, 4));
        for (int i = 1; i <= 20; i++) {
            JButton btn = new JButton("" + i);
            btn.setName("btn" + i);
            btn.addActionListener(this);
            buttonPanel.add(btn);
        }
        add(buttonPanel, BorderLayout.CENTER);

        setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        String buttonText = ((JButton) e.getSource()).getText();
        lblText.setText(buttonText);
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> new eventClass1());
    }
}
