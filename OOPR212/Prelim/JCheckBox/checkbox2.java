package OOPR212.Prelim.JCheckBox;
import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class checkbox2 extends JFrame implements ActionListener {

    private JCheckBox pizzaCheckBox;
    private JCheckBox burgerCheckBox;
    private JCheckBox teaCheckBox;
    private JButton orderButton;
    private JLabel totalCostLabel;

    private final double PIZZA_PRICE = 100.0;
    private final double BURGER_PRICE = 80.0;
    private final double TEA_PRICE = 50.0;

    public checkbox2() {
        setTitle("Food Kiosk");
        setSize(300, 200);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLocationRelativeTo(null);

        pizzaCheckBox = new JCheckBox("Pizza - Php " + PIZZA_PRICE);
        burgerCheckBox = new JCheckBox("Burger - Php " + BURGER_PRICE);
        teaCheckBox = new JCheckBox("Tea - Php " + TEA_PRICE);
        orderButton = new JButton("Order");
        totalCostLabel = new JLabel("Total Cost: Php 0.00");
        pizzaCheckBox.setName("pizzaCheckBox");
        burgerCheckBox.setName("burgerCheckBox");
        teaCheckBox.setName("teaCheckBox");
        orderButton.setName("orderButton");
        totalCostLabel.setName("totalCostLabel");

        orderButton.addActionListener(this);

        setLayout(new GridLayout(5, 1));
        add(pizzaCheckBox);
        add(burgerCheckBox);
        add(teaCheckBox);
        add(orderButton);
        add(totalCostLabel);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        if (e.getSource() == orderButton) {
            computeTotalCost();
        }
    }

    private void computeTotalCost() {
        double totalCost = 0.0;

        if (pizzaCheckBox.isSelected()) {
            totalCost += PIZZA_PRICE;
        }
        if (burgerCheckBox.isSelected()) {
            totalCost += BURGER_PRICE;
        }
        if (teaCheckBox.isSelected()) {
            totalCost += TEA_PRICE;
        }

        if (totalCost > 200) {
            totalCost *= 0.9;
        }

        totalCostLabel.setText(String.format("%.2f", totalCost));
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            checkbox2 app = new checkbox2();
            app.setVisible(true);
        });
    }
}
