import java.awt.*;
import javax.swing.*;

public class jpanel1 {

	public jpanel1()
	{

		JPanel mainPanel = new JPanel(null);
		mainPanel.setName("mainPanel");
		mainPanel.setLayout(null);
		mainPanel.setBounds(0, 0, 500, 500);

		JPanel subPanelA = new JPanel();
		subPanelA.setName("subPanelA");
		subPanelA.setBackground(Color.BLUE);
		subPanelA.setBounds (10, 10, 150, 50);

		JPanel subPanelB = new JPanel();
		subPanelB.setName("subPanelB");
		subPanelB.setBackground(Color.RED);
		subPanelB.setBounds (200, 90, 150, 50);

		mainPanel.add(subPanelA);
		mainPanel.add(subPanelB);

		JFrame frameMalinao = new JFrame();
		frameMalinao.setDefaultCloseOperation (JFrame.EXIT_ON_CLOSE);
		frameMalinao.setResizable(false);
		frameMalinao.setSize(500, 500);
		frameMalinao.getContentPane().add(mainPanel);
        frameMalinao.setVisible(true);
	}

	public static void main (String[] args)
	{
		new jpanel1();
	}
}