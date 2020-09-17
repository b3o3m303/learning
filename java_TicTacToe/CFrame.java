package finalProject;

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;
import javax.swing.event.*;

import finalProject.serverFrame;
import finalProject.serverend;

public class CFrame extends JFrame {
    private JButton jbtnConnect = new JButton("Connect");

    private JButton jbtnExit = new JButton("Exit");

    private JButton jbtnSend = new JButton("Send");

    private JButton jbtnPlay[][] = new JButton[3][3];

    private JButton jbtnReplay = new JButton("Replay");

    private JTextArea jtaIn = new JTextArea();

    private JTextArea jtaOut = new JTextArea();

    private JScrollPane jspIn = new JScrollPane(jtaIn);

    private JScrollPane jspOut = new JScrollPane(jtaOut);

    private JPanel jpnBottom = new JPanel(new BorderLayout(3, 3));

    private JPanel jpnTa = new JPanel(new BorderLayout(3, 3));

    private JTextField jtfIP = new JTextField("127.0.1.1");

    private JPanel functionPan = new JPanel(new GridLayout(7, 1, 5, 5));

    private JPanel jpnPlay = new JPanel(new GridLayout(3, 3, 5, 5));

    private JLabel jlbIP = new JLabel("IP");
    
    private Container cp;

    private Client client;
     private serverend server;

    private int x = 0;// 設定回合的全域變數，0為C的回合；1為S的回合

    private int click = 0;

    public CFrame() {
        initComp();
    }

    public void initComp() {
        this.setBounds(600, 100, 450, 550);
        this.setResizable(false);
        this.setDefaultCloseOperation(DISPOSE_ON_CLOSE);
        this.setTitle("Chat Client");
        cp = this.getContentPane();
        cp.setLayout(new BorderLayout(5, 5));
        client = new Client(CFrame.this);
        jbtnConnect.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent ae) {
                if (((JButton) ae.getSource()).getText().equals("Connect")) {
                    client.start();
                    ((JButton) ae.getSource()).setText("Disconnrct");
                } else {
                    client.closeSocket();
                    ((JButton) ae.getSource()).setText("Connect");
                }
            }
        });
        // **  RE呼叫  不知道是不是應該呼叫SERVER端的 但是會出錯誤
        jbtnReplay.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent ae) {
            	int result=JOptionPane.showConfirmDialog(null, "對方請求重新開始遊戲", "遊戲是否重新開始", JOptionPane.YES_NO_OPTION);    
              
                if (result==JOptionPane.YES_OPTION) {
                	x=0;
                	click = 1;
            		client.send2client("OK");
                	for (int i = 0; i < 3; i++) {
                		for (int j = 0; j < 3; j++) {
                			jbtnPlay[i][j].setEnabled(true);
                			jbtnPlay[i][j].setText("");
                		}
                	}	
                }else if(result==JOptionPane.NO_OPTION) {
                  
                }

            }
        });

        // **
        jbtnExit.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent ae) {
                System.exit(0);
            }
        });
        jbtnSend.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent ae) {
                client.send2client(jtaOut.getText());
                jtaIn.append("Client: " + jtaOut.getText() + "\n");
                jtaOut.setText("");
            }
        });

        jtaOut.addKeyListener(new keyEvent());
        for (int i = 0; i < 3; i++) {
            for (int j = 0; j < 3; j++) {
                jbtnPlay[i][j] = new JButton("");
                jbtnPlay[i][j].addActionListener(new btnEvent());
            }
        }
        jtaIn.setBackground(new Color(200, 199, 239));
        jtaIn.setFont(new Font(null, Font.PLAIN, 14));
        jtaIn.setEditable(false);
        functionPan.add(jlbIP);
        functionPan.add(jtfIP);
        functionPan.add(jbtnConnect);
        functionPan.add(jbtnReplay);
        functionPan.add(jbtnExit);
        jbtnSend.setPreferredSize(new Dimension(81, 120));
        jspIn.setPreferredSize(new Dimension(210, 80));
        jpnTa.add(jspIn, BorderLayout.NORTH);
        jpnTa.add(jspOut, BorderLayout.CENTER);
        for (int i = 0; i < 3; i++) {
            for (int j = 0; j < 3; j++) {
                jpnPlay.add(jbtnPlay[i][j]);
            }
        }
        cp.add(jpnPlay, BorderLayout.CENTER);
        jpnBottom.add(jpnTa, BorderLayout.CENTER);
        jpnBottom.add(jbtnSend, BorderLayout.EAST);
        cp.add(functionPan, BorderLayout.EAST);
        cp.add(jpnBottom, BorderLayout.SOUTH);

    }

    public String getIP() {
        return jtfIP.getText();
    }

    public void addMsg(String inStr) {
       
        jtaIn.append("Sever: " + inStr + "\n");
    }

    public void playing(String str) {// 接收$@開頭的訊息，並且將S與C狀態同步
        int i = (int) str.charAt(1) - 48;
        int j = (int) str.charAt(3) - 48;
        jbtnPlay[i][j].setText("X");
        jbtnPlay[i][j].setEnabled(false);
        check(jbtnPlay[i][j]);
    }

    public void setGround(int a) {
        x = a;
    }

    class btnEvent implements ActionListener {

        @Override
        public void actionPerformed(ActionEvent e) {
            // TODO Auto-generated method stub
            JButton btn = (JButton) e.getSource();

            if (btn.getText().equals("") && x == 0) {
                client.send2client("輪到你囉");
                btn.setText("O");
                btn.setEnabled(false);
                x = 1;
                for (int a = 0; a < 3; a++) {
                    for (int b = 0; b < 3; b++) {
                        if (btn.equals(jbtnPlay[a][b])) {
                            client.send2client("$" + a + "@" + b);
                        }
                    }
                }
                check(btn);
            }
        }
    }

    class keyEvent implements KeyListener {
        public void keyPressed(KeyEvent e) {
            if (e.getKeyCode() == KeyEvent.VK_ENTER) {
                client.send2client(jtaOut.getText());// client端輸出
                jtaIn.append("Client:" + jtaOut.getText() + "\n");
                jtaOut.setText("");
            }
        
        }

        public void keyReleased(KeyEvent e) {

        }

        public void keyTyped(KeyEvent e) {
          
            jtaOut.setText("");
        }
    }

    public static void main(String argv[]) {
        CFrame cFrm = new CFrame();
        cFrm.setVisible(true);
    }

    public void check(JButton jb) {
        click++;
        switch (jb.getText()) {
        case "O":
            if (jbtnPlay[0][0].getText().equals(jbtnPlay[0][1].getText())
                    && jbtnPlay[0][1].getText().equals(jbtnPlay[0][2].getText())
                    && jbtnPlay[0][0].getText().equals("O")) {
                JOptionPane.showMessageDialog(this, "O Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[1][0].getText().equals(jbtnPlay[1][1].getText())
                    && jbtnPlay[1][1].getText().equals(jbtnPlay[1][2].getText())
                    && jbtnPlay[1][0].getText().equals("O")) {
                JOptionPane.showMessageDialog(this, "O Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[2][0].getText().equals(jbtnPlay[2][1].getText())
                    && jbtnPlay[2][1].getText().equals(jbtnPlay[2][2].getText())
                    && jbtnPlay[2][0].getText().equals("O")) {
                JOptionPane.showMessageDialog(this, "O Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[0][0].getText().equals(jbtnPlay[1][0].getText())
                    && jbtnPlay[1][0].getText().equals(jbtnPlay[2][0].getText())
                    && jbtnPlay[0][0].getText().equals("O")) {
                JOptionPane.showMessageDialog(this, "O Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[0][1].getText().equals(jbtnPlay[1][1].getText())
                    && jbtnPlay[1][1].getText().equals(jbtnPlay[2][1].getText())
                    && jbtnPlay[0][1].getText().equals("O")) {
                JOptionPane.showMessageDialog(this, "O Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[0][2].getText().equals(jbtnPlay[1][2].getText())
                    && jbtnPlay[1][2].getText().equals(jbtnPlay[2][2].getText())
                    && jbtnPlay[0][2].getText().equals("O")) {
                JOptionPane.showMessageDialog(this, "O Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[0][0].getText().equals(jbtnPlay[1][1].getText())
                    && jbtnPlay[1][1].getText().equals(jbtnPlay[2][2].getText())
                    && jbtnPlay[0][0].getText().equals("O")) {
                JOptionPane.showMessageDialog(this, "O Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[0][2].getText().equals(jbtnPlay[1][1].getText())
                    && jbtnPlay[1][1].getText().equals(jbtnPlay[2][0].getText())
                    && jbtnPlay[0][2].getText().equals("O")) {
                JOptionPane.showMessageDialog(this, "O Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else {
                if (click == 9) {
                    JOptionPane.showMessageDialog(this, "draw", "輸贏",
                            JOptionPane.PLAIN_MESSAGE);

                }
            }
            break;

        case "X":
            if (jbtnPlay[0][0].getText().equals(jbtnPlay[0][1].getText())
                    && jbtnPlay[0][1].getText().equals(jbtnPlay[0][2].getText())
                    && jbtnPlay[0][0].getText().equals("X")) {
                JOptionPane.showMessageDialog(this, "X Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[1][0].getText().equals(jbtnPlay[1][1].getText())
                    && jbtnPlay[1][1].getText().equals(jbtnPlay[1][2].getText())
                    && jbtnPlay[1][0].getText().equals("X")) {
                JOptionPane.showMessageDialog(this, "X Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[2][0].getText().equals(jbtnPlay[2][1].getText())
                    && jbtnPlay[2][1].getText().equals(jbtnPlay[2][2].getText())
                    && jbtnPlay[2][0].getText().equals("X")) {
                JOptionPane.showMessageDialog(this, "X Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[0][0].getText().equals(jbtnPlay[1][0].getText())
                    && jbtnPlay[1][0].getText().equals(jbtnPlay[2][0].getText())
                    && jbtnPlay[0][0].getText().equals("X")) {
                JOptionPane.showMessageDialog(this, "X Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[0][1].getText().equals(jbtnPlay[1][1].getText())
                    && jbtnPlay[1][1].getText().equals(jbtnPlay[2][1].getText())
                    && jbtnPlay[0][1].getText().equals("X")) {
                JOptionPane.showMessageDialog(this, "X Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[0][2].getText().equals(jbtnPlay[1][2].getText())
                    && jbtnPlay[1][2].getText().equals(jbtnPlay[2][2].getText())
                    && jbtnPlay[0][2].getText().equals("X")) {
                JOptionPane.showMessageDialog(this, "X Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[0][0].getText().equals(jbtnPlay[1][1].getText())
                    && jbtnPlay[1][1].getText().equals(jbtnPlay[2][2].getText())
                    && jbtnPlay[0][0].getText().equals("X")) {
                JOptionPane.showMessageDialog(this, "X Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            } else if (jbtnPlay[0][2].getText().equals(jbtnPlay[1][1].getText())
                    && jbtnPlay[1][1].getText().equals(jbtnPlay[2][0].getText())
                    && jbtnPlay[0][2].getText().equals("X")) {
                JOptionPane.showMessageDialog(this, "X Win.", "輸贏",
                        JOptionPane.PLAIN_MESSAGE);

            }
            break;
        }

        // ******************************

    }

    public void replay() {
        	x=0;
        	click = 1;
        	for (int i = 0; i < 3; i++) {
        		for (int j = 0; j < 3; j++) {
        			jbtnPlay[i][j].setEnabled(true);
        			jbtnPlay[i][j].setText("");
        		
        	}	  
        }
    }

}