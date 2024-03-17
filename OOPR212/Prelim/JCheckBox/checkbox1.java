package OOPR212.Prelim.JCheckBox;
import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.ArrayList;

public class checkbox1 extends JFrame {
    private JCheckBox checkBoxFirst, checkBoxSecond, checkBoxThird;
    private JLabel labelCheckboxes;
    private JButton buttonDisplaySelected;

    public checkbox1() {
        setTitle("CheckBoxes");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLayout(new FlowLayout());

        checkBoxFirst = new JCheckBox("First");
        checkBoxSecond = new JCheckBox("Second");
        checkBoxThird = new JCheckBox("Third");
        labelCheckboxes = new JLabel("Selected: ");
        checkBoxFirst.setName("checkBoxFirst");
        checkBoxSecond.setName("checkBoxSecond");
        checkBoxThird.setName("checkBoxThird");
        labelCheckboxes.setName("labelCheckBoxes");

        buttonDisplaySelected = new JButton("Display Selected");
        buttonDisplaySelected.setName("buttonDisplaySelected");
        buttonDisplaySelected.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                displaySelected();
            }
        });

        add(checkBoxFirst);
        add(checkBoxSecond);
        add(checkBoxThird);
        add(labelCheckboxes);
        add(buttonDisplaySelected);

        setSize(300, 150);
        setVisible(true);
    }

    private void displaySelected() {
        ArrayList<String> selectedLabels = new ArrayList<>();
        if (checkBoxFirst.isSelected()) {
            selectedLabels.add(checkBoxFirst.getText());
        }
        if (checkBoxSecond.isSelected()) {
            selectedLabels.add(checkBoxSecond.getText());
        }
        if (checkBoxThird.isSelected()) {
            selectedLabels.add(checkBoxThird.getText());
        }

        // Prepare the label text
        StringBuilder labelText = new StringBuilder("");
        for (int i = 0; i < selectedLabels.size(); i++) {
            labelText.append(selectedLabels.get(i));
            if (i < selectedLabels.size() - 1) {
                labelText.append(", ");
            }
        }
        labelCheckboxes.setText(labelText.toString());
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(new Runnable() {
            @Override
            public void run() {
                new checkbox1();
            }
        });
    }
}
