package OOPR212.Prelim.JPanel;
import javax.swing.*;

public class jpanel2 {
    public jpanel2() {

        JPanel subPanelA = new JPanel();
        subPanelA.setName("subPanelA");
        subPanelA.setBounds(100, 10, 150, 100);

        JPanel subPanelB = new JPanel();
        subPanelB.setName("subPanelB");
        subPanelB.setBounds(250, 10, 150, 100);

        JPanel mainPanel = new JPanel();
        mainPanel.setLayout(null);
        mainPanel.setName("mainPanel");
        mainPanel.add(subPanelA);
        mainPanel.add(subPanelB);

        JFrame malinaoFrame = new JFrame();
        malinaoFrame.setSize(500, 500);
        malinaoFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        malinaoFrame.setLocationRelativeTo(null);
        malinaoFrame.setResizable(false);
        malinaoFrame.add(mainPanel);

        malinaoFrame.setVisible(true);

    }

    public static void main(String[] args) {
        new jpanel2();
    }
}