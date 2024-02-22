package OOPR212.JWindow;
import javax.swing.*;

public class malinaoJWindowsPosition
{
    public static void main(String[] args) {
        JFrame mainFrame = new JFrame();
        mainFrame.setName("mainFrame");
        mainFrame.setLocation(200, 100);
        mainFrame.setSize(600, 500);
        mainFrame.setTitle("Window with Position");

        JWindow mainWindow = new JWindow(mainFrame);
        mainWindow.setName("mainWindow");
        mainWindow.setLocation(300, 150);
        mainWindow.setSize(400, 400);
        mainWindow.setVisible(true);

        mainFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        mainFrame.setVisible(true);

    }
}
