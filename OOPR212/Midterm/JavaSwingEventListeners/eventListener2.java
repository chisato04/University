package OOPR212.midterm.JavaSwingEventListeners;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.util.LinkedHashSet;
import java.util.Set;

public class eventListener2 extends JFrame {
    private JLabel languageLabel;
    private JLabel proficiencyLabel;
    private JComboBox<String> proficiencyComboBox;
    private JCheckBox cCheckBox;
    private JCheckBox cppCheckBox;
    private JCheckBox cSharpCheckBox;
    private JCheckBox javaCheckBox;
    private JCheckBox pythonCheckBox;
    private Set<String> selectedLanguages = new LinkedHashSet<>();

    public eventListener2() {
        // Initialize components
        languageLabel = new JLabel("Languages: ");
        proficiencyLabel = new JLabel("Low");
        proficiencyComboBox = new JComboBox<>(new String[]{"Low", "Medium", "High"});
        cCheckBox = new JCheckBox("C");
        cppCheckBox = new JCheckBox("C++");
        cSharpCheckBox = new JCheckBox("C#");
        javaCheckBox = new JCheckBox("Java");
        pythonCheckBox = new JCheckBox("Python");

        // Set component names
        languageLabel.setName("languageLabel");
        proficiencyLabel.setName("proficiencyLabel");
        proficiencyComboBox.setName("proficiencyComboBox");
        cCheckBox.setName("cCheckBox");
        cppCheckBox.setName("cppCheckBox");
        cSharpCheckBox.setName("cSharpCheckBox");
        javaCheckBox.setName("javaCheckBox");
        pythonCheckBox.setName("pythonCheckBox");

        // Add action listeners for checkboxes
        ItemListener checkboxListener = e -> {
            JCheckBox source = (JCheckBox) e.getItemSelectable();
            if (e.getStateChange() == ItemEvent.SELECTED) {
                selectedLanguages.add(source.getText());
            } else {
                selectedLanguages.remove(source.getText());
            }
            updateLanguages();
        };
        cCheckBox.addItemListener(checkboxListener);
        cppCheckBox.addItemListener(checkboxListener);
        cSharpCheckBox.addItemListener(checkboxListener);
        javaCheckBox.addItemListener(checkboxListener);
        pythonCheckBox.addItemListener(checkboxListener);

        // Add action listener for combo box
        proficiencyComboBox.addActionListener(e -> proficiencyLabel.setText(proficiencyComboBox.getSelectedItem().toString()));

        // Layout the components
        setLayout(new GridLayout(0, 1));
        add(languageLabel);
        add(proficiencyLabel);
        add(proficiencyComboBox);
        add(cCheckBox);
        add(cppCheckBox);
        add(cSharpCheckBox);
        add(javaCheckBox);
        add(pythonCheckBox);

        // Set default close operation and window size
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        pack();
        setLocationRelativeTo(null);
    }

    private void updateLanguages() {
        String selectedLanguagesText = String.join(", ", selectedLanguages);
        languageLabel.setText(selectedLanguagesText);
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            new eventListener2().setVisible(true);
        });
    }
}