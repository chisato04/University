package OOPR212.prelim.JRadioButton;
import javax.swing.*;
import java.awt.event.*;
import java.awt.*;

public class radiobutton1 {

    public static void main(String[] args) {
        JFrame frameMalinao = new JFrame("Find the Spy");
        frameMalinao.setSize(900, 200);
        frameMalinao.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        JCheckBox shoesCheckBox = new JCheckBox("Shoes");
        JCheckBox pantsCheckBox = new JCheckBox("Pants");
        JCheckBox shirtCheckBox = new JCheckBox("Shirt");
        JComboBox<String> paymentMethodComboBox = new JComboBox<>();
        JRadioButton defaultRadioButton = new JRadioButton("Default");
        JRadioButton specialRadioButton = new JRadioButton("Special");
        JButton generateButton = new JButton("Generate Receipt");
        JTextArea receiptTextArea = new JTextArea();
        JTextField nameTextField = new JTextField();
        paymentMethodComboBox.addItem("Cash");
        paymentMethodComboBox.addItem("Credit Card");
        paymentMethodComboBox.addItem("Debit Card");
        ButtonGroup promogroup = new ButtonGroup();
        promogroup.add(defaultRadioButton);
        promogroup.add(specialRadioButton);

        shoesCheckBox.setName("shoesCheckBox");
        pantsCheckBox.setName("pantsCheckBox");
        shirtCheckBox.setName("shirtCheckBox");
        paymentMethodComboBox.setName("paymentMethodComboBox");
        defaultRadioButton.setName("defaultRadioButton");
        specialRadioButton.setName("specialRadioButton");
        generateButton.setName("generateButton");
        receiptTextArea.setName("receiptTextArea");
        nameTextField.setName("nameTextField");

        generateButton.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {

                String name = nameTextField.getText();
                String paymentmet = (String) paymentMethodComboBox.getSelectedItem();
                String item = "";
                double cost = 0;
                double discount = 0;
                double discountedcost = cost;

                if (shoesCheckBox.isSelected()) {
                    cost += 200;
                    item = item.concat("Shoes, ");
                }
                if (pantsCheckBox.isSelected()) {
                    cost += 150;
                    if (shirtCheckBox.isSelected()) {
                        item = item.concat("Pants, ");
                    } else {
                        item = item.concat("Pants");
                    }

                }
                if (shirtCheckBox.isSelected()) {
                    cost += 120;
                    item = item.concat("Shirt");
                }

                if (defaultRadioButton.isSelected()) {
                    if (cost > 300) {
                        discount = cost * 0.05;
                        discountedcost = cost - discount;
                    } else {
                        discount = 0;
                        discountedcost = cost - discount;
                    }
                }
                if (specialRadioButton.isSelected()) {
                    discount = cost * 0.15;
                    discountedcost = cost - discount;
                }

                receiptTextArea.setText("Name: " + name + "\nItems: " + item + "\nPayment Method: " + paymentmet
                        + "\nTotal Cost: " + String.format("%.2f", discountedcost));
            }
        });

        frameMalinao.add(nameTextField);
        frameMalinao.add(paymentMethodComboBox);
        frameMalinao.add(shoesCheckBox);
        frameMalinao.add(pantsCheckBox);
        frameMalinao.add(shirtCheckBox);
        frameMalinao.add(defaultRadioButton);
        frameMalinao.add(specialRadioButton);
        frameMalinao.add(specialRadioButton);
        frameMalinao.add(generateButton);
        frameMalinao.add(receiptTextArea);
        frameMalinao.setLayout(new FlowLayout());
        frameMalinao.setVisible(true);

    }
}