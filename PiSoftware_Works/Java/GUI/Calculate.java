import java.awt.EventQueue;
import java.awt.Toolkit;

import javax.swing.JFrame;
import javax.swing.JButton;
import java.awt.Button;
import java.awt.Dimension;

import javax.swing.JTextField;
import javax.tools.Tool;

import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;

public class Calculate {

	private JFrame frame;
	private JTextField textField;
	int geciciDeger=0;
	String islem = "";
	
	
	public String getIslem() {
		return islem;
	}

	public void setIslem(String islem) {
		this.islem = islem;
	}

	public int getGeciciDeger() {
		return geciciDeger;
	}

	public void setGeciciDeger(int geciciDeger) {
		this.geciciDeger = geciciDeger;
	}

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Calculate window = new Calculate();
					window.frame.setVisible(true);
					window.frame.setLocationRelativeTo(null);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the application.
	 */
	public Calculate() {
		initialize();
		
	}

	/**
	 * Initialize the contents of the frame.
	 */
	
	
	private void initialize() {
		
		int geciciDeger=0;
		
		frame = new JFrame();
		frame.setTitle("Basic Calculator");
		frame.setResizable(false);
		frame.getContentPane().setLayout(null);

		
		textField = new JTextField();
		textField.setBounds(10, 11, 363, 33);
		frame.getContentPane().add(textField);
		textField.setColumns(10);
		
		
		JButton btn1 = new JButton("1");
		btn1.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				textField.setText(textField.getText().toString()+"1");
			}
		});
		btn1.setBounds(10, 55, 89, 48);
		frame.getContentPane().add(btn1);
		
		JButton btn2 = new JButton("2");
		btn2.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				textField.setText(textField.getText().toString()+"2");
			}
		});
		btn2.setBounds(109, 55, 89, 48);
		frame.getContentPane().add(btn2);
		
		JButton btn3 = new JButton("3");
		btn3.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				textField.setText(textField.getText().toString()+"3");
			}
		});
		btn3.setBounds(208, 55, 89, 48);
		frame.getContentPane().add(btn3);
		
		JButton btn4 = new JButton("4");
		btn4.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				textField.setText(textField.getText().toString()+"4");
			}
		});
		btn4.setBounds(10, 114, 89, 48);
		frame.getContentPane().add(btn4);
		
		JButton btn5 = new JButton("5");
		btn5.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				textField.setText(textField.getText().toString()+"5");
			}
		});
		btn5.setBounds(109, 114, 89, 48);
		frame.getContentPane().add(btn5);
		
		JButton btn6 = new JButton("6");
		btn6.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				textField.setText(textField.getText().toString()+"6");
			}
		});
		btn6.setBounds(208, 114, 89, 48);
		frame.getContentPane().add(btn6);
		
		JButton btn7 = new JButton("7");
		btn7.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				textField.setText(textField.getText().toString()+"7");
			}
		});
		btn7.setBounds(10, 173, 89, 48);
		frame.getContentPane().add(btn7);
		
		JButton btn8 = new JButton("8");
		btn8.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				textField.setText(textField.getText().toString()+"8");
			}
		});
		btn8.setBounds(109, 173, 89, 48);
		frame.getContentPane().add(btn8);
		
		JButton btn9 = new JButton("9");
		btn9.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				textField.setText(textField.getText().toString()+"9");
			}
		});
		btn9.setBounds(208, 173, 89, 48);
		frame.getContentPane().add(btn9);
		
		JButton btn0 = new JButton("0");
		btn0.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				if(textField.getText().toString().charAt(0)!='0'){
					textField.setText(textField.getText().toString()+"0");
				}
			}
		});
		btn0.setBounds(10, 232, 89, 48);
		frame.getContentPane().add(btn0);
		
		Button btnBol = new Button("/");
		btnBol.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				setIslem("bol");
				setGeciciDeger(Integer.parseInt(textField.getText().toString()));
				textField.setText("");
			}
		});
		btnBol.setBounds(303, 55, 70, 48);
		frame.getContentPane().add(btnBol);
		
		Button btnCarp = new Button("X");
		btnCarp.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				setIslem("carp");
				setGeciciDeger(Integer.parseInt(textField.getText().toString()));
				textField.setText("");
			}
		});
		btnCarp.setBounds(303, 114, 70, 48);
		frame.getContentPane().add(btnCarp);
		
		Button btnCikar = new Button("-");
		btnCikar.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				setIslem("cikar");
				setGeciciDeger(Integer.parseInt(textField.getText().toString()));
				textField.setText("");
			}
		});
		btnCikar.setBounds(303, 173, 70, 48);
		frame.getContentPane().add(btnCikar);
		
		Button btnTopla = new Button("+");
		btnTopla.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				setIslem("topla");
				setGeciciDeger(Integer.parseInt(textField.getText().toString()));
				textField.setText("");
				
			}
		});
		btnTopla.setBounds(303, 232, 70, 48);
		frame.getContentPane().add(btnTopla);
		
		JButton btnHesapla = new JButton("=");
		btnHesapla.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				int toplam = 0;

				switch (getIslem()) {
				case "topla":
					toplam = getGeciciDeger()+Integer.parseInt(textField.getText().toString());
					break;
				case "cikar":
					toplam = getGeciciDeger()-Integer.parseInt(textField.getText().toString());			
					break;
				
				case "carp":
					toplam = getGeciciDeger()*Integer.parseInt(textField.getText().toString());
					break;
				
				case "bol":
					toplam = getGeciciDeger()/Integer.parseInt(textField.getText().toString());
					break;
				}
				
				textField.setText(""+toplam);
			}
		});
		btnHesapla.setBounds(208, 232, 89, 48);
		frame.getContentPane().add(btnHesapla);
		
		JButton btnGeri = new JButton("<- Geri");
		btnGeri.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				String str = textField.getText().toString();
				if(str.length()>0){
					textField.setText(str.substring(0, str.length()-1));
				}
			}
		});
		btnGeri.setBounds(109, 232, 89, 48);
		frame.getContentPane().add(btnGeri);
		
		frame.setBounds(100, 100, 390, 320);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
	}
}
