import javax.swing.*;

public class MALINAO_SwingActivity extends JFrame {
    public MALINAO_SwingActivity() {
        setTitle("Frame With Position"); // title of the window
        setName("frmPractice"); // name of the frame
        setSize(600, 500); // window dimensions
        setLocation(750, 300); // set window position
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); //close when press close button
        setVisible(true); //makes the frame visible
    }

    public static void main(String[] args) {
        new MALINAO_SwingActivity();
    }
}

// malinao, james patrick m. | bsit 2-y2-1 | feb 5, 2023