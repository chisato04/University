package OOPR212.Layouts;
import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class layouts2 extends JFrame implements ActionListener {
    private JLabel resultLabel;
    private JPanel buttonsPanel;

    public layouts2() {
        setTitle("Calculator");
        setSize(300, 400);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLayout(new BorderLayout());

        resultLabel = new JLabel("0", JLabel.RIGHT);
        resultLabel.setName("resultLabel");
        add(resultLabel, BorderLayout.NORTH);

        buttonsPanel = new JPanel();
        buttonsPanel.setName("buttonsPanel");
        buttonsPanel.setLayout(new GridLayout(4, 4));

        for (int i = 1; i <= 9; i++) {
            JButton button = new JButton(String.valueOf(i));
            button.setName("button" + i);
            button.addActionListener(this);
            buttonsPanel.add(button);
        }

        JButton zeroButton = new JButton("0");
        zeroButton.setName("zeroButton");
        zeroButton.setName("button0");
        zeroButton.addActionListener(this);
        buttonsPanel.add(zeroButton);

        JButton addButton = new JButton("+");
        addButton.setName("addButton");
        addButton.setName("addButton");
        addButton.addActionListener(this);
        buttonsPanel.add(addButton);

        JButton subtractButton = new JButton("-");
        subtractButton.setName("subtractButton");
        subtractButton.setName("subtractButton");
        subtractButton.addActionListener(this);
        buttonsPanel.add(subtractButton);

        JButton multiplyButton = new JButton("*");
        multiplyButton.setName("multiplyButton");
        multiplyButton.addActionListener(this);
        buttonsPanel.add(multiplyButton);

        JButton divideButton = new JButton("/");
        divideButton.setName("divideButton");
        divideButton.addActionListener(this);
        buttonsPanel.add(divideButton);

        JButton clearButton = new JButton("C");
        clearButton.setName("clearButton");
        clearButton.addActionListener(this);
        buttonsPanel.add(clearButton);

        JButton computeButton = new JButton("=");
        computeButton.setName("computeButton");
        computeButton.addActionListener(this);
        buttonsPanel.add(computeButton);

        add(buttonsPanel, BorderLayout.CENTER);

        setVisible(true);
    }

    public static void main(String[] args) {
        new layouts2();
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        String command = e.getActionCommand();
        String currentText = resultLabel.getText();

        if (command.equals("C")) {
            resultLabel.setText("0");
        } else if (command.equals("=")) {
            try {
                String result = String.valueOf(eval(currentText));
                resultLabel.setText(result);
            } catch (ArithmeticException ex) {
                resultLabel.setText("Error");
            }
        } else {
            if (currentText.equals("0")) {
                resultLabel.setText(command);
            } else {
                resultLabel.setText(currentText + command);
            }
        }
    }

    private double eval(String expression) {
        return new Object() {
            int pos = -1, ch;

            void nextChar() {
                ch = (++pos < expression.length()) ? expression.charAt(pos) : -1;
            }

            boolean eat(int charToEat) {
                while (ch == ' ') nextChar();
                if (ch == charToEat) {
                    nextChar();
                    return true;
                }
                return false;
            }

            double parse() {
                nextChar();
                double x = parseExpression();
                if (pos < expression.length()) throw new RuntimeException("Unexpected: " + (char) ch);
                return x;
            }

            double parseExpression() {
                double x = parseTerm();
                for (; ; ) {
                    if (eat('+')) x += parseTerm(); // Addition
                    else if (eat('-')) x -= parseTerm(); // Subtraction
                    else return x;
                }
            }

            double parseTerm() {
                double x = parseFactor();
                for (; ; ) {
                    if (eat('*')) x *= parseFactor(); // Multiplication
                    else if (eat('/')) x /= parseFactor(); // Division
                    else return x;
                }
            }

            double parseFactor() {
                if (eat('+')) return parseFactor(); // Unary plus
                if (eat('-')) return -parseFactor(); // Unary minus
                double x;
                int startPos = this.pos;
                if (eat('(')) { // Parentheses
                    x = parseExpression();
                    eat(')');
                } else if ((ch >= '0' && ch <= '9') || ch == '.') { // Numbers
                    while ((ch >= '0' && ch <= '9') || ch == '.') nextChar();
                    x = Double.parseDouble(expression.substring(startPos, this.pos));
                } else {
                    throw new RuntimeException("Unexpected: " + (char) ch);
                }
                return x;
            }
        }.parse();
    }
}
