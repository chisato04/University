import javax.swing.*;

public class AWTActivity extends JFrame {
    public AWTActivity() {
        setTitle("Frame With Position"); // title of the window
        setName("frmPractice"); // name of the frame
        setSize(600, 500);
        setLocation(750, 300);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); //close when press close button
        setVisible(true); //makes the frame visible
    }

    public static void main(String[] args) {
        new AWTActivity();
    }
}
