package OOPR212.Prelim.JWindow;
import javax.swing.*;
import javax.swing.JWindow;

public class malinaoJWindows {
	public static void main(String[] args) {

		JFrame mainFrame = new JFrame();
		mainFrame.setTitle("Creating JWindows");
		mainFrame.setName("mainFrame");
		mainFrame.setSize(800, 350);
		mainFrame.setLocation(200, 100);

		JWindow window1 = new JWindow(mainFrame);
		window1.setLocation(300, 150);
		window1.setSize(300, 250);
		window1.setVisible(true);
		window1.setName("window1");

		JWindow window2 = new JWindow(mainFrame);
		window2.setLocation(600, 150);
		window2.setSize(300, 250);
		window2.setVisible(true);
		window2.setName("window2");

		mainFrame.setVisible(true);

	}

}