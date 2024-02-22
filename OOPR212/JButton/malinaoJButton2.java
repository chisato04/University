package OOPR212.JButton;
import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.JPanel;

public class malinaoJButton2
{
	private static int counterLabel1 = 0;
	public static void main(String[] args)
    {
		JPanel panel = new JPanel();

		JLabel counterLabel = new JLabel("" + counterLabel1);
		counterLabel.setBounds(5, 50, 40, 40);
		counterLabel.setName("counterLabel");

		JButton incrementButton = new JButton("Click");
		incrementButton.setBounds(30, 50, 40, 40);
		incrementButton.setName("incrementButton");

        JFrame frame = new JFrame();
		frame.setTitle("Counter");
		frame.setSize(300, 100);
		frame.setVisible(true);
		frame.add(panel);
		panel.add(counterLabel);
		panel.add(incrementButton);

		incrementButton.addActionListener(new ActionListener()
        {
			public void actionPerformed(ActionEvent e) {
				counterLabel1++;
				counterLabel.setText("" + counterLabel1);

			}
		});


	}

}
