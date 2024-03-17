import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class layouts2 extends JFrame {
    private JLabel resultLabel;
    private JPanel buttonsPanel;

    public layouts2() {
        setTitle("Calculator");
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setSize(400, 400);
        setLocationRelativeTo(null);
        setLayout(new BorderLayout());

        resultLabel = new JLabel("", SwingConstants.RIGHT);
        resultLabel.setName("resultLabel");
        add(resultLabel, BorderLayout.NORTH);

        buttonsPanel = new JPanel();
        buttonsPanel.setName("buttonsPanel");
        buttonsPanel.setLayout(new GridLayout(4, 4, 5, 5));
        addButtons();
        add(buttonsPanel, BorderLayout.CENTER);
    }

    private void addButtons() {
        String[] buttonLabels = {
                "7", "8", "9", "/",
                "4", "5", "6", "*",
                "1", "2", "3", "-",
                "0", "C", "=", "+"
        };

        for (String label : buttonLabels) {
            JButton button = new JButton(label);
            switch (label) {
                case "/":
                    button.setName("divideButton");
                    break;
                case "*":
                    button.setName("multiplyButton");
                    break;
                case "-":
                    button.setName("subtractButton");
                    break;
                case "+":
                    button.setName("addButton");
                    break;
                case "C":
                    button.setName("clearButton");
                    break;
                case "=":
                    button.setName("computeButton");
                    break;
                default:
                    button.setName("button" + label);
                    break;
            }
            button.addActionListener(new ButtonClickListener());
            buttonsPanel.add(button);
        }
    }

    class ButtonClickListener implements ActionListener {
        @Override
        public void actionPerformed(ActionEvent e) {
            String command = e.getActionCommand();
            switch (command) {
                case "C":
                    resultLabel.setText("");
                    break;
                case "=":
                    try {
                        String result = evaluate(resultLabel.getText());
                        resultLabel.setText(result);
                    } catch (Exception ex) {
                        resultLabel.setText("Error");
                    }
                    break;
                default:
                    resultLabel.setText(resultLabel.getText() + command);
                    break;
            }
        }
    }

    private String evaluate(String expression) {
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

            String parse() {
                nextChar();
                double x = parseExpression();
                if (pos < expression.length()) throw new RuntimeException("Unexpected: " + (char)ch);
                return String.valueOf((int)x);
            }

            double parseExpression() {
                double x = parseTerm();
                for (;;) {
                    if (eat('+')) x += parseTerm(); // addition
                    else if (eat('-')) x -= parseTerm(); // subtraction
                    else return x;
                }
            }

            double parseTerm() {
                double x = parseFactor();
                for (;;) {
                    if (eat('*')) x *= parseFactor(); // multiplication
                    else if (eat('/')) x /= parseFactor(); // division
                    else return x;
                }
            }

            double parseFactor() {
                if (eat('+')) return parseFactor(); // unary plus
                if (eat('-')) return -parseFactor(); // unary minus

                double x;
                int startPos = this.pos;
                if (eat('(')) { // parentheses
                    x = parseExpression();
                    eat(')');
                } else if ((ch >= '0' && ch <= '9') || ch == '.') { // numbers
                    while ((ch >= '0' && ch <= '9') || ch == '.') nextChar();
                    x = Double.parseDouble(expression.substring(startPos, this.pos));
                } else {
                    throw new RuntimeException("Unexpected: " + (char)ch);
                }

                return x;
            }
        }.parse();
    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            layouts2 frame = new layouts2();
            frame.setVisible(true);
        });
    }
}